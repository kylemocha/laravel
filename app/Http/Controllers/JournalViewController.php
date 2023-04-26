<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JournalView;
use App\Models\ApptModel;
use App\Models\Notif;
use App\Models\User;

use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class JournalViewController extends Controller
{
    public function index(){ //display data
        
        //$threads = Thread::getAllLatest()->get();
        $users = JournalView::userr()->get();
        $posts = User::orderBy('is_admin', 'ASC')->where('is_admin', 2)->get();
        $apps = ApptModel::userr()->get();
        $notifs = Notif::userr()->get();
        //$apps = auth()->user();
        
        //return view('home_user')->withUsers($users); //do not edit
        return view('home_user', compact('posts', 'users', 'apps', 'notifs'));
        //return view('home_user')->with('users',$users)->with('posts',$posts)->with('apps',$apps);
    }  

    function delete($id) //delete
    {
        $users = JournalView::find($id);
        $users->delete();
        return redirect('home_user')->withSuccess('Successfully deleted your journal entry.');	
    }
    function showData($id){
       $users= JournalView::find($id);
       return view ('edit', ['user'=>$users]);
    }
    function update(Request $req){
       $users=JournalView::find($req->id);
       $users->title=$req->title;
       $users->message=$req->message;
       $users->save();
       return redirect('home_user')->withSuccess('Successfully updated your journal entry.');   
    }

    function showJournal($id){
        $users= JournalView::find($id);
        return view ('view', ['user'=>$users]);
    }

    function deleteNotif($id) //delete
    {
        $notifs = Notif::find($id);
        $notifs->delete();
        return redirect('home_user')->withSuccess('Successfully deleted a notification.');	
    }

    /**
     * Shows a message thread.
     *
     * @param $id
     * @return mixed
     */
    public function message()
    {
        $threads = Thread::getAllLatest()->get();
        return view('index_message', compact('threads'));

    }
    public function show($id)
    {
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

            return redirect()->route('messages');
        }

        // show current user in list if not a current participant
        // $users = User::whereNotIn('id', $thread->participantsUserIds())->get();

        // don't show the current user in list
        $userId = Auth::id();
        $users = User::whereNotIn('id', $thread->participantsUserIds($userId))->get();

        $thread->markAsRead($userId);

        return view('show', compact('thread', 'users'));
    }

    /**
     * Creates a new message thread.
     *
     * @return mixed
     */
    public function create()
    {
        $users = User::where('id', '!=', Auth::id())->get();

        return view('create', compact('users'));
    }

    /**
     * Stores a new message thread.
     *
     * @return mixed
     */
    public function store()
    {
        $input = \Illuminate\Support\Facades\Request::all();

        $thread = Thread::create([
            'subject' => $input['subject'],
        ]);

        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => $input['message'],
        ]);

        // Sender
        Participant::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'last_read' => new Carbon(),
        ]);

        // Recipients
        if (\Illuminate\Support\Facades\Request::has('recipients')) {
            $thread->addParticipant($input['recipients']);
        }

        return redirect()->route('messages');
    }

    /**
     * Adds a new message to a current thread.
     *
     * @param $id
     * @return mixed
     */
    public function updateMessage($id)
    {
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

            return redirect()->route('messages');
        }

        $thread->activateAllParticipants();

        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => \Illuminate\Support\Facades\Request::input('message'),
        ]);

        // Add replier as a participant
        $participant = Participant::firstOrCreate([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
        ]);
        $participant->last_read = new Carbon();
        $participant->save();

        // Recipients
        if (\Illuminate\Support\Facades\Request::has('recipients')) {
            $thread->addParticipant(\Illuminate\Support\Facades\Request::input('recipients'));
        }

        return redirect()->route('message.show', $id); //message.show
    }
    
}
