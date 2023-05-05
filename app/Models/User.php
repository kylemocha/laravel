<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cmgmyr\Messenger\Traits\Messagable;
use Laravel\Sanctum\HasApiTokens;
use Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Messagable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'role',
        'name',
        'email',
        'phonenumber',
        'address',
        'password',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
      
    public function scopeUserr($query){
     return $query->where('user_id',Auth::user()->id); 
    }
   
}
