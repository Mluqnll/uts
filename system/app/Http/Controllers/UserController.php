<?php

namespace App\Http\Controllers;
use Illuminate\http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data['list_user'] = User::all();
        return view('admin.user.index', $data);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store()
    {
        $user = New User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt (request('password'));
        $user->save();
        return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($user)
    {
        $data['user'] = User::find($user);
        return view('admin.user.show', $data);
    }

    public function edit($user)
    {
        $data['user'] = User::find($user);;
        return view('admin.user.edit', $data);
    }

    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->save();

        return redirect('user')->with('success', 'Data Berhasil Di Simpan');
    }

    public function destroy($user)
    {
        User::destroy($user);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
