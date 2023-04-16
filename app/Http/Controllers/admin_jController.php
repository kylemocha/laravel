<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Models\JournalView;
use Illuminate\Http\Request;

class admin_jController extends Controller
{
    public function index(){
        $journals = DB::select('select * from journal_details');
        return view('admin',['journals'=>$journals]);
        }
}
