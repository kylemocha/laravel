<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatingsController extends Controller
{
    public function insertForm() {
        return view('home_user');
    }
    public function insert(Request $request) {
        $rating = $request->input('rating');
        $message = $request->input('message');
        $data=array('rating'=>$rating,"message"=>$message);
        DB::table('ratings')->insert($data);
        //echo "Record inserted successfully.<br/>";
        //echo '<a href = "home_user">Click Here</a> to go back.';
        return redirect("home_user")->withSuccess('Great! Thanks for rating your mood today.');
    }
}
