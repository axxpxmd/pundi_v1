<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageCard1Bottom extends Model
{
    protected $table    = 'homepage_card1bottom';
    protected $fillable = ['id', 'article_id', 'created_at', 'updated_at'];

    public function article()
    {
        return $this->belongsTo(Articles::class, 'article_id');
    }
}
