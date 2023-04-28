<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'user_id', 'name', 'date', 'time'];

    public function scopeUserr($query)
{
     return $query->where('user_id',Auth::user()->id);     
}
}
