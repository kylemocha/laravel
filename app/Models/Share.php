<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    protected $table = 'share';

    protected $fillable = ['id', 'user_id', 'title', 'message' ,'therapist'];
}
