<?php

namespace App\Http\Controllers;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    public function index(Request $request){

    $id = Auth::user()->id;
    //
    $users['users'] = DB::table('users')->where('id','=', $id)->first();
    if(count ($users)>0){
      return view('therapist',compact('users'));
    }
     else
    {
        return view('therapist');
    }
  }
}
