<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;
    public $table = "users";
    public $timestamps = false;

    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'phone',
        'location',
        'role',
        'remember_token'
    ];
    
    protected $guarded = [
        'id',
    ];

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
