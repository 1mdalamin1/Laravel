<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;

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
        return $request->all();

    }
}
