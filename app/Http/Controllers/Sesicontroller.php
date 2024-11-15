<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sesicontroller extends Controller
{
    // fungsi menampilkan page registrasi
    function tampilRegistrasi()
    {
        return view('registrasi');
    }

    function submitRegistrasi(Request $request)
    {
        // Jalankan validasi terlebih dahulu
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password',
            ],
            [
                'name.required' => 'Username Wajib Diisi',
                'email.required' => 'Email Wajib Diisi',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password Wajib Diisi',
                'password.min' => 'Password minimal 8 karakter',
                'confirm_password.required' => 'Konfirmasi Password Wajib Diisi',
                'confirm_password.same' => 'Konfirmasi Password harus sama dengan Password',
            ]
        );

        // Jika validasi berhasil, data akan disimpan
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->confirm_password = bcrypt($request->confirm_password);
        $user->save();
        return redirect()->route('login.tampil');
    }


    // fungsi menampilkan page login
    function tampilLogin()
    {
        return view('login');
    }


    // untuk peringatan harus mengisi email dan password
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

        // variabel untuk mengecek apakah data email dan password yang dimasukkannya benar 
        $infoLogin =
            [
                'email' => $request->email,
                'password' => $request->password,
            ];
        if (Auth::attempt($infoLogin)) {
            return redirect('/home');
        } else {
            return redirect('/login')->withErrors(['login' => 'Username atau password salah'])->withInput();
        }
    }
}
