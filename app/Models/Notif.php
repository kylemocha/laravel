<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;

    protected $table = 'notifs';
   
    protected $fillable = ['id', 'user_id', 'therapist','client_name', 'message'];

    public function scopeUserr($query){
        return $query->where('user_id',Auth::user()->id); 
    }


}
