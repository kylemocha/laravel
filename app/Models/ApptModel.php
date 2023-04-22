<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApptModel extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    public $fillable = ['Client_id', 'Name', 'Phone_number', 'Email',  'Appt_date', 'Appt_time', 'Mode_of_consultation', 'T_id', 'Therapist', 'status'];

    public function scopeUserr($query)
    {
     return $query->where('client_id', Auth::user()->id);  
    }
}
