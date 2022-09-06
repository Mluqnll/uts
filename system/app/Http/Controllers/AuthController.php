<?php  

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Penulis;

class AuthController extends Controller
{
    
    function login(){
        return view('login');
    }

    public function loginproses(){
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin')->with('success', 'Selamat Datang');
        } 

        if (auth()->guard('penulis')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('base-penulis');
        }
        

        return redirect('login')->with('success', 'Password Yang Anda Masukkan Salah');
    }

    public function logout(){
        auth()->logout();
        auth()->guard('penulis')->logout();
        return redirect('login');
    }
}
