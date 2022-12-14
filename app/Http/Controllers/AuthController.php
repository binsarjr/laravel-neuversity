<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect('/dosen');
        } else {
            return back()->withInput()->with('failedLoginMessage', 'Email and password is invalid');
        }
    }

    public function doLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
