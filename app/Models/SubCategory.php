<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table    = 'sub_kategori';
    protected $fillable = ['id', 'kategori_id', 'n_sub_kategori', 'created_at', 'updated_at'];
}
