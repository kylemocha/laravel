<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;


class JournalViewController extends Controller
{
    public function index(){
        $users = DB::select('select * from journal_details');
        return view('home_user',['users'=>$users]);
    }    
    
}
