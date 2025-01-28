<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('admin.auth.login'); // Mengarahkan ke view login admin
    }

    // Memproses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cek kredensial dan autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regenerasi sesi untuk keamanan
            return redirect()->route('admin.dashboard'); // Redirect ke dashboard admin
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email'); // Mengembalikan input email
    }

    // Memproses logout
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Invalidasi sesi
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        return redirect()->route('admin.login'); // Redirect ke halaman login
    }
}
