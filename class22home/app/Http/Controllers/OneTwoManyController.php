<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class OneTwoManyController extends Controller
{
    function index()
    {
        $datas = null;
        // return $data = User::withOnly('profile')->get();
        $datas = Post::get();
        return view('relationship.one-to-many', compact('datas'));
    }
}
