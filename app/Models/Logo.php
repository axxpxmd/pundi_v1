<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table    = 'logo';
    protected $fillable = ['id', 'logo_title', 'header', 'footer', 'preloader', 'logo_share', 'created_at', 'updated_at'];
}
