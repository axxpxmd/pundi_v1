<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table    = 'artikel';
    protected $fillable = ['id', 'judul', 'kategori_id', 'editor_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'tag', 'artikel_view', 'status', 'created_at', 'updated_at'];
}
