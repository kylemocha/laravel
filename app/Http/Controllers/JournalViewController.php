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
    public function index(){
        //$users = DB::table('journal_details')->select(Auth::user()->id,'User_name','message') ->get();
        
        //$users=JournalView::all();
        $users = JournalView::userr()->get();
        
        return view('home_user')->withUsers($users);
        
       // $users = JournalView::home_user()->get();
         //$users['users'] =JournalView::orderBy('User_name','message')->get();
         //$users = DB::table('journal_details')->get()->toArray();
        //return view('home_user')->with('users', $users);
        //return view('home_user')->with($users); 
        //return view("home_user",['users' => $users]);
        //return view('home_user', compact('users'));
         //return view('home_user', $users);
         //$users = DB::select('select * from journal_details');
         //return view('home_user',['users'=>$users]);
    }    
    
}
