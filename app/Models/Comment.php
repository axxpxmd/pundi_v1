<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model
use App\User;

class Comment extends Model
{
    protected $table    = 'comments1';
    protected $fillable = ['id', 'article_id', 'user_id', 'content', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function article()
    {
        return $this->belongsTo(Articles::class, 'article_id');
    }
}
