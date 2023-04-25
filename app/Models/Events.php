<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'user_id', 'name', 'date', 'time'];
}
