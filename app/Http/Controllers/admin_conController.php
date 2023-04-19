<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use App\Models\JournalView;
use App\Models\ApptModel;
use Illuminate\Http\Request;

class admin_conController extends Controller
{   
    public function index(){     
        $users = User::all();
        $cons = Contact::all();
        $journals = JournalView::all();
        $appts = ApptModel::all();

        return view('admin', compact('users', 'cons', 'journals', 'appts'));
    } 

    function deleteUser($id) //delete
    {
        $users = User::find($id);
        $users->delete();
        return redirect('admin')->withSuccess('Successfully deleted user.');	
    }

    function showUser($id){
        $users= User::find($id);
        return view ('edit_admin', ['users'=>$users]); 
    }
    function updateUser(Request $request, $id)
    {    
      $users = User::find($id);
      $users->is_admin = $request->input('is_admin');
      $users->name = $request->input('name');
      $users->email = $request->input('email');
      $users->phonenumber = $request->input('phonenumber'); 
      $users->address = $request->input('address');
      $users->update();
      return redirect('admin')->withSuccess('Successfully updated the user profile.');
    }


}

