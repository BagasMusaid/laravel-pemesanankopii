<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'jud' => 'login
            '
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            if (auth::user()->role == 'admin') {
                alert()->info('Berhasil Login', 'Selamat Datang' . Auth::user()->name);
                return redirect('/dashbord');
            } elseif (auth::user()->role == 'pengguna') {
                alert()->html('Berhasil Login ', "
                         Selamat Datang <b style='text-transform: uppercase'>
                         " . Auth::user()->name . "</b>", 'success');
                return redirect('/');
            }
        }

        return redirect()->to('/login')->with('loginError', 'username atau password salah');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
