<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Penulis;

class BlogController extends Controller
{
    
    public function index()
    {
        $data['list_blog'] = Blog::all();
        return view('admin.blog.index', $data);
    }

   
    public function create()
    {
        $data['list_penulis'] = Penulis::all();
        return view('admin.blog.create', $data);
    }

    
    public function store()
    {
        $blog = new Blog;
        $blog->id_penulis = request('id_penulis');
        $blog->judul = request('judul');
        $blog->handleUploadGambarBlog();
        $blog->detail = request('detail');
        $blog->save();
        return redirect('admin/blog')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Blog $blog)
    {
        $data['blog'] = $blog;
        
        return view('admin.blog.show', $data);
    }

    
    public function edit(Blog $blog)
    {
        $data['blog'] = $blog;
        $data['list_penulis'] = Penulis::all();
        return view('admin.blog.edit', $data);
    }

    
    public function update(Blog $blog)
    {
        $blog->id_penulis = request('id_penulis');
        $blog->judul = request('judul');
        $blog->handleUploadGambarBlog();
        $blog->detail = request('detail');
        $blog->save();
        return redirect('admin/blog')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function destroy($blog)
    {
        Blog::destroy($blog);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
