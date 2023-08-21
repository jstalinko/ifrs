<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    
    public function login(): View
    {
        return view('login');
    }
    public function authLogin(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'Login Success');
        }
        return redirect()->back()->with('error', 'Login Failed');
    }
}
