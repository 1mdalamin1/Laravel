<?php

use App\Events\UserCreatedEvent;
use App\Models\User;
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

Route::get('new-user', function () {

    $user = User::create([
        'name' => 'Tanvir',
        'email' => 'virza805@gmail.com',
        'password' => 123
    ]);
    event(new UserCreatedEvent($user));
    return 1;
});
