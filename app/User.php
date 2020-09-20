<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['role_id', 'name', 'email', 'password', 'nama_depan', 'nama_belakang', 'username', 'photo', 'bio', 'nomor_hp', 'facebook', 'twitter', 'instagram'];
    protected $hidden   = ['password', 'remember_token',];
    protected $casts    = ['email_verified_at' => 'datetime',];
}
