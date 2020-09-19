<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table    = 'gambar';
    protected $fillable = ['id', 'header', 'footer', 'poster', 'created', 'updated_at'];
}
