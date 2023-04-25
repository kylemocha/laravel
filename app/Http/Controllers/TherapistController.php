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
    $id = Auth::user()->id;
    $users['users'] = DB::table('users')->where('id','=', $id)->first();
    $appts = ApptModel::where('Therapist', $id)->get();
    //$lists =  ApptModel::orderBy('status', 'ASC')->where('status', 1)->get();
    //$lists = ApptModel::where('status', $id)->get(); ApptModel::orderBy('status', 'ASC')->where('status', 1)->get();

    $apps = User::orderBy('is_admin', 'ASC')->where('is_admin', 0)->get(); //user

    if(count ($users)>0){
      $events = array();
      $events = Events::all();
     //$events->pluck('user_id')->toArray();
     //$events = Events::all()->pluck(['user_id']);
        
      foreach($events as $event){
        $events [] = [
            'title' =>  $event['name'],
            'start' =>   $event['date'],
            'time' =>   $event['time'],
          ];
        }
        //return $events;
      return view('therapist',compact('users', 'appts', 'events', 'apps'));
    }
     else
    {
        return view('therapist');
    }
    
    
  }

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
    $date = $request->input('date');
    $time = $request->input('time');
    $data=array("user_id"=>$userId,'name'=>$name,"date"=>$date, "time"=>$time);
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
 function seeNotif(){
  return view('therapist');
}
 function storeNotif(Request $request){
  $userId = Auth::user()->id;
  $therapist = $request->input('therapist');
  $name = $request->get('client_name');
  $message = $request->input('message');
  $data=array("user_id"=>$userId,'client_name'=>$name, "therapist"=>$therapist, "message"=>$message);
  DB::table('notifs')->insert($data);
  return redirect("therapist")->withSuccess('Great! You have sent an notification.');
}



}
 

