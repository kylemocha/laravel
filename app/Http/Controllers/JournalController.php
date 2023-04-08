<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JournalController extends Controller
{
    public function insertform() {
        return view('home_user');
    }
    public function insert(Request $request) {
        $User_name = $request->input('User_name');
        $J_date = $request->input('JournalDate');
        $message = $request->input('message');
        $data=array('User_name'=>$User_name,"JournalDate"=>$J_date,"message"=>$message);
        DB::table('journal_details')->insert($data);
        //echo "Record inserted successfully.<br/>";
        //echo '<a href = "home_user">Click Here</a> to go back.';
        return redirect("home_user")->withSuccess('Great! Thanks for writing in your journal.');
    }
    
}
