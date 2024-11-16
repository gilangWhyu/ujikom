<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function tampilRegistrasi() {
        return view('registrasi'); 
    }
    function submitRegistrasi(Request $request) {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->alamat = $request->alamat;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->save();
        // dd($user);
        return redirect()->route('login.tampil');
    }

    
    function tampilLogin() {
        return view('login');
    }

    function submitLogin(Request $request) {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('gagal', 'email atau password anda salah');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('login.tampil');
    }
}       
