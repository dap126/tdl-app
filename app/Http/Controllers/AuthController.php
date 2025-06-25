<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'nim' => 'required|max:20|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'jurusan' => 'required',
            'angkatan' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => $request->password,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
        ]);

        return redirect('login');
    }
        public function login(Request $request): RedirectResponse
    {
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            $user =  User::where(['username' => $request->username])->first();
            Auth::login($user);
            return redirect('/');
        }
        return redirect('login')->with('error', 'Username/Password salah! Mohon periksa kembali.');
    }
        public function logout(Request $request): RedirectResponse
    {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

        return redirect('login');
    }
        public function dashboard()
    {
        return view('dashboard'); 
    }
        public function profile()
    {
        return view('profile'); 
    }
}