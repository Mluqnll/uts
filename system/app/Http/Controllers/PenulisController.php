<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    public function index()
    {
        $data['list_penulis'] = Penulis::all();
        return view('admin.penulis.index', $data);
    }

    public function create()
    {
        return view ('admin.penulis.create');
    }

    public function store()
    {
        $penulis = new Penulis;
        $penulis->nama = request('nama');
        $penulis->username = request('username');
        $penulis->email = request('email');
        $penulis->nomor_hp = request('nomor_hp');
        $penulis->password = bcrypt (request('password'));
        $penulis->save();
        return redirect('admin/penulis')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function show(Penulis $penulis)
    {
        $data['penulis'] = Penulis::find($penulis);
        return view('admin.penulis.show', $data);
    }

    public function edit(Penulis $penulis)
    {
        $data['penulis'] = Penulis::find($penulis);
        return view('admin.penulis.edit', $data);
    }

    public function update(Penulis $penulis)
    {
        $penulis->nama = request('nama');
        $penulis->username = request('username');
        $penulis->email = request('email');
        $penulis->nomor_hp = request('nomor_hp');
        $penulis->save();

        return redirect('penulis')->with('success', 'Data Berhasil Di Simpan');
    }

    public function destroy($penulis)
    {
        Penulis::destroy($penulis);

        return back()->with('danger','Data Berhasil Dihapus');
    }
}
