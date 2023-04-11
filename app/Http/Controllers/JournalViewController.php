<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\JournalView;

class JournalViewController extends Controller
{
    public function index(){
        
        $users = JournalView::userr()->get();
        
        return view('home_user')->withUsers($users);
    
    }    
    
}
