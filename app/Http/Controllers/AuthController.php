<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect('/dashboard');
            } elseif ($user->hasRole('user')) {
                return redirect('/user/dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['unauthorized' => 'আপনার কোনো role নেই।']);
            }
        }

        return back()->withErrors(['login_failed' => 'ইমেইল অথবা পাসওয়ার্ড ভুল!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
