<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Penulis;
use App\Models\Komentar;

class BlogPenulisController extends Controller
{
    
    public function index()
    {
        $data['list_blog'] = Blog::all();
        $data['penulis'] = auth()->guard('penulis')->user();
        return view('penulis.blog.index', $data);
    }

   
    public function create()
    {
        $data['list_penulis'] = Penulis::all();
        $data['penulis'] = auth()->guard('penulis')->user();
        return view('penulis.blog.create', $data);
    }

    
    public function store()
    {
        $blog = new Blog;
        $blog->id_penulis = request('id_penulis');
        $blog->judul = request('judul');
        $blog->handleUploadGambarBlog();
        $blog->detail = request('detail');
        $blog->save();
        return redirect('blog-penulis')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Blog $blog)
    {
        $data['blog'] = $blog;
        $data['penulis'] = auth()->guard('penulis')->user();
        $data['list_komentar'] = Komentar::all();
        return view('penulis.blog.show', $data);
    }

    
    public function edit(Blog $blog)
    {
        $data['blog'] = $blog;
        $data['penulis'] = auth()->guard('penulis')->user();
        return view('penulis.blog.edit', $data);
    }

    
    public function update(Blog $blog)
    {
        $blog->id_penulis = request('id_penulis');
        $blog->judul = request('judul');
        $blog->handleUploadGambarBlog();
        $blog->detail_string = request('detail');
        $blog->save();
        return redirect('blog-penulis')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function destroy($blog)
    {
        Blog::destroy($blog);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }

    public function balasKomen()
    {
        $komentar = New Komentar();
        $komentar->id_blog = request('id_blog');
        $komentar->level = 2;
        $komentar->nama = request('nama');
        $komentar->email = request('email');
        $komentar->pesan = request('pesan');
        $komentar->save();

        return back();
    }
}
