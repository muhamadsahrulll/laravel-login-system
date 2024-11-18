<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegisterForm()
{
    return view('register');
}

public function register(Request $request)
{
    // Validasi input
    $request->validate([
        'username' => 'required|string|max:255|unique:users', // username wajib unik
        'password' => 'required|string|min:6',
    ]);

    // Simpan ke database
    User::create([
        'username' => $request->username,
        'password' => bcrypt($request->password), // Enkripsi password
    ]);

    return redirect()->route('login')->with('success', 'User registered successfully!');
}



    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username tidak boleh kosong.',
            'password.required' => 'Password tidak boleh kosong.',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user', $user->username);
            return redirect('/welcome');
        }

        return back()->withErrors(['login_failed' => 'Username atau password salah.']);
    }

    public function welcome()
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }
        return view('welcome', ['username' => Session::get('user')]);
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/login');
    }
}
