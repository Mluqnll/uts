<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\Models\Model;

class Komentar extends Model
{
    protected $tabel = "komentar";

    function Blog()
    {
        return $this->belongsTo(Blog::class, 'id_blog');
    }
}
