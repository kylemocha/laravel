<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\JournalView;

class JournalViewController extends Controller
{
    public function get_users(){
        $users = DB::table('journal_details')->select(Auth::user()->id,'User_name','message') ->get();
        //$users=JournalView::all();
        //return view('home_user',$users);
         //$users['users'] =JournalView::orderBy('User_name','message')->get();
         //$users = DB::table('journal_details')->get()->toArray();
         return view('home_users')->with('users', $users);

         //return view("home_user",['users'=>$users]);
         //return view('home_user', compact('users'));
         //return view('home_user', $users);
    }    
    
}
