<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Events;
use Illuminate\Http\Request;

class CalenderController extends Controller
{    
    public function calendar(){  
        $events = array();
        $events = Events::all();
        foreach($events as $event){
        $events[] = [
            'name' => $event->name,
            'desc' => $event->description,
            'date' => $event->date,
            'time' => $event->time,
          ];
        }
        //return $events;
    
        return view('therapist', ['events' => $events]);
    }

   
}
