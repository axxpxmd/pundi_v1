<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table    = 'users1';
    protected $fillable = ['id', 'name', 'username', 'email', 'password', 'first_name', 'last_name', 'photo', 'bio', 'no_telp', 'facebook', 'twitter', 'instagram', 'email_verified_at', 'remember_token', 'created_at', 'updated_at'];
    protected $hidden   = ['password', 'remember_token',];
    protected $casts    = ['email_verified_at' => 'datetime',];
}
