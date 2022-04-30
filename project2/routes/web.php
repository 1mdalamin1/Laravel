<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\Auth\{

//     AuthenticatedSessionController,
//     ConfirmablePasswordController,
//     EmailVerificationNotificationController,
//     EmailVerificationPromptController,
//     NewPasswordController,
//     PasswordResetLinkController,
//     RegisteredUserController,
//     VerifyEmailController
// };
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

Route::get('users', function () {
    return view('users/users');
});

Route::get('groups', function () {
    return view('groups/groups');
});

// Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
   # Group Routers
// Route::prefix('order')->name('order.')->controller(OrderController::class)->group(function () {

//     Route::get('/', 'index')->name('index');
//     Route::get('/details/{order}', 'details')->name('details');
//     Route::post('/status/{order}', 'status')->name('status');
// });
