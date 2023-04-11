<?php

namespace App\Models;
use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalView extends Model
{
use HasFactory; 
 protected $table = 'journal_details';
 protected $fillable = ['id', 'User_name', 'JournalDate', 'user_id' , 'message'];

public function scopeUserr($query)
{
     return $query->where('user_id',Auth::user()->id);
      
}
    
}
 