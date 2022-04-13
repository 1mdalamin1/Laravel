<?php

use App\Http\Controllers\HTTPClientController;
use App\Http\Controllers\RedisController;
use App\Http\Controllers\SessionController;
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

Route::get('redis-get', [RedisController::class, 'getRedis']);
Route::get('redis-set', [RedisController::class, 'setRedis']);
Route::get('redis-delete', [RedisController::class, 'deleteRedis']);

// Session StartNow:-
Route::get('session-get', [SessionController::class, 'getSession']);
Route::get('session-set', [SessionController::class, 'setSession']);
Route::get('session-delete', [SessionController::class, 'deleteSession']);



Route::get('http', [HTTPClientController::class, 'index']);





