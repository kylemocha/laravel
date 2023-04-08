<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class JournalViewController extends Controller
{
    public function index(){
        $js = DB::select('select * from journal_details');
        return view ('index')->with('User_name',$js);
    }    
    
}
