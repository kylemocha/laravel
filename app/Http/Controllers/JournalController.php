<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JournalController extends Controller //insert data
{
    public function insertform(){
        return view('home_user');
    }
    public function insert(Request $request) {
        $title = $request->input('title');
        $User_name = $request->input('User_name');
        $J_date = $request->input('JournalDate');
        $userId = Auth::user()->id;
        $message = $request->input('message');
        $data=array('title'=>$title,'User_name'=>$User_name,"JournalDate"=>$J_date,"user_id"=>$userId,"message"=>$message);
        DB::table('journal_details')->insert($data);
        //echo "Record inserted successfully.<br/>";
        //echo '<a href = "home_user">Click Here</a> to go back.';
        return redirect("home_user")->withSuccess('Great! Thanks for writing in your journal.');
    }
    
}
