<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Penulis;
use App\Models\Model;

class Blog extends Model
{
    protected $table = 'blog';
    
    
    function Penulis(){
		return $this->belongsTo(Penulis::class, 'id_penulis');
	}

    function handleUploadGambarBlog()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "blog";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }
}
