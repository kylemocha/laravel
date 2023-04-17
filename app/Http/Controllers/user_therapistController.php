<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class user_therapistController extends Controller
{
    public function index() {
        $posts = User::orderBy('is_admin', 'ASC')->get();
        return view('home_user',compact('posts'));
    }
}
