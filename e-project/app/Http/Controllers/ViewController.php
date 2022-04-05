<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
       $data = [];
       $data['numbers'] = [10, 20, 30, 40, 50];
       $data['text'] = '<h2>Hello World</h2>';
        if (view()->exists('index')){

            return view('index', $data );

        } else {

            abort(404);

        }
        // return view('welcome');
    }
}
