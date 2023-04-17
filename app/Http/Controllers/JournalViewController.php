<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JournalView;

class JournalViewController extends Controller
{
    public function index(){ //display data
        
        $users = JournalView::userr()->get();
        
        return view('home_user')->withUsers($users); //do not edit
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
    
}
