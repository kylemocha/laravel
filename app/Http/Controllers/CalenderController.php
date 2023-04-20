<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\CalendarEvents;
use Illuminate\Http\Request;

class CalenderController extends Controller
{    
    public function index(Request $request)
    {
        if($request->ajax()) {  
           // $userId = Auth::id();
            $data = CalendarEvents::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'event_name', 'event_start', 'event_end']);
            return response()->json($data);
        }
        return view('therapist');
    }

    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
           case 'create':
              $event = CalendarEvents::create([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'edit':
              $event = CalendarEvents::find($request->id)->update([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = CalendarEvents::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # ...
             break;
        }
    }
    public function getEvents()
      {
      $events = CalendarEvents::all();
      return response()->json(['data'=> $events])->getData();
}
}
