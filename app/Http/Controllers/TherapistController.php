<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ApptModel;
use App\Models\Events;
use DB;
use Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    public function index(Request $request){//display contents of logged-in user

   // $appointments = ApptModel::where('Therapist', '=', $users)->get(); //

   //$appointments = ApptModel::where('Therapist', $appointments->id)->get();

   //$user_id = Auth::user()->id;
   //$appts = ApptModel::where('Therapist', $user_id)->get(); 


    $id = Auth::user()->id;

    $users['users'] = DB::table('users')->where('id','=', $id)->first();
    $appts = ApptModel::where('Therapist', $id)->get();
    //$events = Events::all();

    if(count ($users)>0){
      $events = array();
      $events = Events::all();
      foreach($events as $event){
        $events [] = [
            'title' => $event['name'],
            'start_time' =>  $event['start_time'],
          ];
        }
      return view('therapist',compact('users', 'appts', 'events'));
    }
     else
    {
        return view('therapist');
    }
    
    
    }
   
    // return view('therapist', ['events' => $events]);

  function edit($id)
  {
      $users = User::find($id);
      return view('edit_therapist', ['users'=>$users]);
  }
  function update(Request $request, $id)
  {   
      $users = User::find($id);
      $users->name = $request->input('name');
      $users->email = $request->input('email');
      $users->phonenumber = $request->input('phonenumber'); 
      $users->address = $request->input('address');
      $users->update();
      return redirect('therapist')->withSuccess('Successfully updated your profile.');
  }
  function seeForm(){
    return view('therapist');
  }
  function insertSchedule(Request $request) {
    $userId = Auth::user()->id;
    $name = $request->input('name');
    $date = $request->input('start_time');
    $time = $request->input('');
    $data=array("user_id"=>$userId,'name'=>$name,"start_time"=>$date,"end_time"=>$time);
    DB::table('events')->insert($data);
    return redirect("therapist")->withSuccess('Great! You have created an event.');
  }

  function approve($id){
    $appts = ApptModel::findOrFail($id);
    //$appts = Config::get('Approved'); //Approved
    //$appts = ApptModel::where('status' , Approved);//Approved
    $appts->status = 1; 
    $appts->save();
    return redirect("therapist")->withSuccess('Great! You have approved this consultation.');//Redirect user somewhere
  }
 function decline($id){
  $appts = ApptModel::findOrFail($id);
  //$appts->status = Declined; //Declined
  // $appts = ApptModel::where('status' , Rejected);
  $appts->status = 2; 
  $appts->save();
  return redirect("therapist")->withSuccess('You have declined this consultation.'); //Redirect user somewhere
 } 


}
 

