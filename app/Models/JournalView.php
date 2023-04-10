<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalView extends Model
{
use HasFactory; 
 protected $table = 'journal_details';
 public $fillable = ['User_name', 'JournalDate', 'user_id' , 'message'];
}
