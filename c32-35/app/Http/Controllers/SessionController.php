<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function getSession()
    {
        echo Session::get('age');
        return Session::get('name', 'Default name');
    }

    public function setSession()
    {
        Session::flash('age', 27);
        Session::put('name', 'Tanvir');
    }

    public function deleteSession()
    {
        Session::forget('name');
    }
}
