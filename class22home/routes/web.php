<?php

use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneTwoManyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one-to-one', [OneToOneController::class, 'index']);

Route::get('/one-to-many', [OneTwoManyController::class, 'index']);

Route::get('/many-to-many', [ManyToManyController::class, 'index']);

