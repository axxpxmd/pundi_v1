<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table    = 'sub_category';
    protected $fillable = ['id', 'category_id', 'n_sub_category', 'created_at', 'updated_at'];
}
