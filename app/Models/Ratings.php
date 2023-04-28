<?php

namespace App\Models;
use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = ['id', 'user_id', 'rating', 'comment'];

    public function scopeUserr($query){
        return $query->where('user_id',Auth::user()->id); 
    }
}
