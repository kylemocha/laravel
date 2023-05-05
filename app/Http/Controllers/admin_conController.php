<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use DB;
use Auth;
use Hash;
use App\Models\JournalView;
use App\Models\ApptModel;
use Illuminate\Http\Request;

class admin_conController extends Controller
{   
    public function index(){     
        $users = User::all();
        $cons = Contact::all();
        //$journals = JournalView::all();
        $appts = ApptModel::all();

        return view('admin', compact('users', 'cons', 'appts'));
    } 
    
    function showAddUser($id){
        $users= User::find($id);
        return view ('add_user', ['users'=>$users]); 
    }

    function addUser(Request $request)
    {    
        $inputs=$request->all();
        $inputs['password']=Hash::make($inputs['password']);
        User::create($inputs);
        return redirect('admin')->withSuccess('Successfully added a user.');
    }

    function loginUser(Request $request)
    {    
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home_user')
                        ->withSuccess('Signed in');
        }
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
      $users->type = $request->input('type');
      $users->phonenumber = $request->input('phonenumber'); 
      $users->address = $request->input('address');
      $users->update();
      return redirect('admin')->withSuccess('Successfully updated the user profile.');
    }


}

