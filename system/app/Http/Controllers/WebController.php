<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Komentar;

class WebController extends Controller
{
    
    public function index()
    {
        $data['list_blog'] = Blog::all();
        return view('web.index', $data);
    }

    
    public function blog()
    {
        
    }

    
    public function store(Request $request)
    {
        $komentar = New Komentar();
        $komentar->id_blog = request('id_blog');
        $komentar->level = 1;
        $komentar->nama = request('nama');
        $komentar->email = request('email');
        $komentar->pesan = request('pesan');
        $komentar->save();

        return back();

    }

    
    public function show(Blog $blog)
    {
        $data['blog'] = $blog;
        $data['list_komentar'] = Komentar::all();
        return view('web.blog-detail', $data);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
