<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with([
            'danger' => 'Login Failed',
            'pesan' => 'Check Your Login Information',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
