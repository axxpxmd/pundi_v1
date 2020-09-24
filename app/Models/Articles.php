<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model
use App\User;

class Articles extends Model
{
    protected $table    = 'artikel';
    protected $fillable = ['id', 'judul', 'kategori_id', 'editor_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'tag', 'artikel_view', 'status', 'created_at', 'updated_at'];

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }

    public function sub_kategori()
    {
        return $this->belongsTo(SubCategory::class, 'sub_kategori_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'penulis_id');
    }
}
