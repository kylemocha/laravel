<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Events;
use Illuminate\Http\Request;

class CalenderController extends Controller
{    
    function calendar(){  
        $events = array();
        $events = Events::all();
        foreach($events as $event){
        $events[] = [
            'name' => $event->name,
            'description'=> $event->description,
            'date'=> $event->date,
            'time'=> $event->time,
        ];
        }
        return $events;
    
        return view('therapist', ['events' => $events]);
     }

   
}
