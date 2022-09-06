<?php

// use Illuminate\Database\Eloquent\Factories\HasFactory;
namespace App\Models;
use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Penulis extends ModelAuthenticate
{
    protected $table = 'penulis';
    protected $primariKey = 'id';
}
