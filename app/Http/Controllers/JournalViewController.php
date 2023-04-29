<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JournalView;
use App\Models\ApptModel;
use App\Models\Notif;
use App\Models\User;
use App\Models\Ratings;
use DB;
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
        $specialists = User::orderBy('is_admin', 'ASC')->where('is_admin', 2)->get();
        $ratings = Ratings::userr()->get();
        //$meeps = User::orderBy('is_admin', 'ASC')->where('is_admin', 2)->get();
        //$apps = auth()->user();
        
        //return view('home_user')->withUsers($users); //do not edit
        return view('home_user', compact('posts', 'users', 'apps', 'notifs', 'specialists', 'ratings'));
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
       $users->title =$req->input('title');
       $users->message =$req->input('message');
       $users->save();
       return redirect('home_user')->withSuccess('Successfully updated your journal entry.');   
    }

    function deleteNotif($id) //delete
    {
        $notifs = Notif::find($id);
        $notifs->delete();
        return redirect('home_user')->withSuccess('Successfully deleted a notification.');	
    }

    function showJournal($id){
        $users= JournalView::find($id);
        $meeps = User::orderBy('is_admin', 'ASC')->where('is_admin', 2)->get();
        return view ('view', compact('users', 'meeps'));
    }

    function insertJournal(Request $request){
        $userId = Auth::user()->id;
        $title = $request->input('title');
        $name = $request->input('User_name');
        $message = $request->input('message');
        $JournalDate = $request->input('JournalDate');
        $T_id = $request->get('therapist');
        $data=array("user_id"=>$userId, "title"=>$title, "User_name"=>$name, "message"=>$message,"JournalDate"=>$JournalDate, "therapist"=>$T_id);
        DB::table('share')->insert($data);
        return redirect("home_user")->withSuccess('Successfully shared your journal to your chosen specialist.');
    }

    public function ratingsMood(Request $request){
        $userId = Auth::user()->id;
        $rating = $request->input('rating');
        $date = $request->input('date');
        $comment = $request->input('comment');
        $data=array("user_id"=>$userId, "rating"=>$rating, "date"=>$date, "comment"=>$comment);
        DB::table('ratings')->insert($data);
        return redirect("home_user")->withSuccess('Your rating has been submitted successfully.');
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
