<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HTTPClientController extends Controller
{
    public function index()
    {
        $url = "http//localhost:8000/api/users";
        Http::get($url);
    }
}
