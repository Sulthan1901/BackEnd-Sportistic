<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SesiApiController extends Controller
{

    public function submitRegistrasi(Request $request)
    {
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

        return response()->json(['status' => true, 'data' => $user, 'message' => 'Save data succes']);
    }

}
