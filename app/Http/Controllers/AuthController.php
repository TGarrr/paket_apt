<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Password Minimal 6 Karakter',
        ]);
    }
}
