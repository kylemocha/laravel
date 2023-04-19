<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ApptModel;
use Auth;
use DB;
use Illuminate\Http\Request;

class ApptController extends Controller
{    

    public function showForm(Request $request) {
        return view('home_user');
    }
    public function storeForm(Request $request){
        $name = $request->input('Name');
        $phonenumber = $request->input('Phone_number');
        $Email = $request->input('Email');
        $userId = Auth::user()->id;
        $date = $request->input('Appt_date');
        $time = $request->input('Appt_time');
        $Mode = $request->input('Mode_of_consultation');
        $T_id = $request->get('Therapist');
        //$therapist = $request->get('Therapist');
        $status = $request->input('Status');
        $data=array('Name'=>$name,'Phone_number'=>$phonenumber,"Email"=>$Email,"Client_id"=>$userId,"Appt_date"=>$date, "Appt_time"=>$time, "Mode_of_consultation"=>$Mode,
        "Therapist"=>$T_id, "Status"=>$status);
        DB::table('appointments')->insert($data);
        return redirect("home_user")->withSuccess('Successfully created an appointment.');
       

    }
}
