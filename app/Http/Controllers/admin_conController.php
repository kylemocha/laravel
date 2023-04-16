<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use App\Models\JournalView;
use Illuminate\Http\Request;

class admin_conController extends Controller
{   
    public function index(){     
        $users = User::all();
        $cons = Contact::all();
        $journals = JournalView::all();
        return view('admin', compact('users', 'cons', 'journals'));

    } 
}

