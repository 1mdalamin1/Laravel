<?php

use App\Events\UserCreatedEvent;
use App\Http\Controllers\NotificationController;
use App\Mail\SendSMailToUser;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
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
        'email' => 'tanvirmdalamain1@gmail.com',
        'password' => 123
    ]);
    event(new UserCreatedEvent($user));
    return 1;
});
Route::get('user-mail', function () {



    $user = User::create([
        'name' => 'Tanvir Hasan',
        'email' => 'onamicatanvi@gmail.com',
        'password' => 123
    ]);
    event(new UserCreatedEvent($user));
    return 1;
});

Route::get('notify', [NotificationController::class, 'mail']);
