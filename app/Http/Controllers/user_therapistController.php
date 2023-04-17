<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class user_therapistController extends Controller
{
    public function viewTherapist() {
        
    $therapists = User::where('is_admin' == 2)->get();

    return view('home_user')->with('therapists', $therapists);

    }
}
