<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class JournalViewController extends Controller
{
    public function index(){
        //$journal_details = DB::table('journal_details')->select('id','User_name','JournalDate')->get();
        //return view('home_user') ->with('journal_details', $journal_details);
        //return view('home_user', compact('journal_details'));
        //return view('home_user')->with('journal_details', $journal_details);
        $js = DB::select('select * from journal_details');
       // return view('journal_details',['js'=>$js]);
        //return view('/home_user', compact('js'));
        //return view('home_user')->with('home_user', $js);
        return view('home_user',compact('js'));
    }    
    
}
