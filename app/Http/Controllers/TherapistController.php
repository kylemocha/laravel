<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ApptModel;
use DB;
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
    //
    $users['users'] = DB::table('users')->where('id','=', $id)->first();
    $appts = ApptModel::where('Therapist', $id)->get();
    if(count ($users)>0){
      return view('therapist',compact('users', 'appts'));
    }
     else
    {
        return view('therapist');
    }
  }
  public function edit($id)
  {
      $users = User::find($id);
      return view('edit_therapist', ['users'=>$users]);
  }
  public function update(Request $request, $id)
  {   
      $users = User::find($id);
      $users->name = $request->input('name');
      $users->email = $request->input('email');
      $users->phonenumber = $request->input('phonenumber'); 
      $users->address = $request->input('address');
      $users->update();
      return redirect('therapist')->withSuccess('Successfully updated your profile.');
  }
  public function seeForm(){
    return view('therapist');
  }
  public function insertSchedule(Request $request) {
    $userId = Auth::user()->id;
    $name = $request->input('name');
    $description = $request->input('description');
    $date = $request->input('date');
    $time = $request->input('time');
    $data=array("user_id"=>$userId,'name'=>$name,'description'=>$description,"date"=>$date,"time"=>$time);
    DB::table('events')->insert($data);
    return redirect("therapist")->withSuccess('Great! You have created an event.');
}

  
}
