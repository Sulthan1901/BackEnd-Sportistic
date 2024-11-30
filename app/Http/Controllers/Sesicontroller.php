<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Sesicontroller extends Controller
{
    // Fungsi untuk menampilkan halaman registrasi
    function tampilRegistrasi()
    {
        return view('registrasi');
    }

    function submitRegistrasi(Request $request)
    {
        $request->validate(
            [
                'username' => 'required|string|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password',
            ],
            [
                'username.required' => 'Username Wajib Diisi',
                'username.unique' => 'Username sudah terdaftar',
                'email.required' => 'Email Wajib Diisi',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password Wajib Diisi',
                'password.min' => 'Password minimal 8 karakter',
                'confirm_password.required' => 'Konfirmasi Password Wajib Diisi',
                'confirm_password.same' => 'Konfirmasi Password harus sama dengan Password',
            ]
        );

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login.tampil');
    }

    // Fungsi untuk menampilkan halaman login
    function tampilLogin()
    {
        return view('login');
    }

    function submitLogin(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]
        );

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            return redirect('/home');
        } else {
            return redirect('/login')->withErrors(['login' => 'Email atau password salah'])->withInput();
        }
    }

    // Fungsi untuk logout
    function logout(Request $request)
    {
        // Pastikan pengguna sudah login sebelum logout
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect('/login')->with('message', 'Berhasil logout');
    }

    // Fungsi untuk update data user
    function updateUser(Request $request)
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['login' => 'Anda harus login terlebih dahulu']);
        }

        $request->validate(
            [
                'username' => 'sometimes|string|unique:users,username,' . Auth::id(),
                'password' => 'sometimes|min:8|confirmed',
            ],
            [
                'username.unique' => 'Username sudah digunakan',
                'password.min' => 'Password minimal 8 karakter',
                'password.confirmed' => 'Konfirmasi password tidak sesuai',
            ]
        );

        $user = Auth::user();

        if ($request->has('username')) {
            $user->username = $request->username;
        }

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('/profile')->with('message', 'Profil berhasil diperbarui');
    }
}
