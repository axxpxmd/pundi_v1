<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageSideBar extends Model
{
    protected $table    = 'homepage_sidebar';
    protected $fillable = ['id', 'article_id', 'created_at', 'updated_at'];

    public function article()
    {
        return $this->belongsTo(Articles::class, 'article_id');
    }
}
