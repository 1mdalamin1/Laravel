<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashbord()
    {
        return view('auth.dashbord');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcsqrt($request->input('password')),
        ]);
        return redirect()->route('login');


    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'exists:users,email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['email' => 'Something is wrong !!']);
        }
        // return $credentials;

    }
}
