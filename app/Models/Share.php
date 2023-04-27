<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    protected $table = 'share';

    protected $fillable = ['id', 'user_id', 'name', 'title', 'message' ,'therapist'];

    public function scopeUserr($query){
        return $query->where('therapist',Auth::user()->id); 
    }

}
