<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class user_therapistController extends Controller
{
    public function viewTherapist(Request $request) {
        $id = Auth::user()->id;
        //
        $profiles['users'] = DB::table('users')->where('id','=', $id)->first();
        if(count ($profiles)>0){
          return view('home_user',compact('profiles'));
        }
         else
        {
            return view('home_user');
        }
    
    }
}
