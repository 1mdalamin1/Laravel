<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/web.php
// LaravelLocalization

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/property/{id}', [PropertyController::class, 'single'])->name('single-property');
    Route::get('/properties}', [PropertyController::class, 'index'])->name('properties');
    Route::get('/page/{slug}', [PageController::class, 'single'])->name('page');
    Route::post('/property-inquiry/{id}', [ContactController::class, 'propertyInquiry'])->name('property-inquiry');

    // Route::get('/currency/{code}', [HomeController::class, 'currencyChange'])->name('currency-change');

});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/




// admin routes

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');
    Route::get('/dashboard/property', [DashboardController::class, 'properties'])->name('dashboard-properties');
    Route::get('/dashboard/add-property', [DashboardController::class, 'addProperty'])->name('add-property');
    // Route::post('/dashboard/delete-media/{media_id}', [DashboardController::class, 'deleteMedia'])->name('delete-media');




    // Route::resource('dashboard-property', PropertyController::class);
    // Route::resource('dashboard-location', LocationController::class);
    // Route::resource('dashboard-page', PageController::class);
    // Route::resource('dashboard-user', UserController::class);
    // Route::resource('dashboard-post', UserController::class);

    // Route::get('/dashboard/messages', [DashboardController::class, 'messages'])->name('dashboard-messages');
    // Route::get('/dashboard/message/{id}', [DashboardController::class, 'singleMessage'])->name('message');
    // Route::delete('/dashboard/delete-message/{id}', [DashboardController::class, 'deleteMessage'])->name('delete-message');
});

require __DIR__.'/auth.php';
