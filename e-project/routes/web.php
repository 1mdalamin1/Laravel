<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\StudentController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('view', [ViewController::class, 'index'])->name('view');
// Route::get('/', [StudentController::class, 'index']);
Route::get('/', [CustomerController::class, 'index']);
Route::get('/scope', [StudentController::class, 'scope']);







