<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin')->group(function() {

    // Route::view('test', 'layouts.backend_master');
    Route::view('test', 'layouts.backend_app');

    // Route::view('login', 'backend.auth.login');
    // Route::view('dashboard', 'backend.dashboard');

    // Route::resource('category', CategoryController::class);
    // Route::get('/dashboard', function () {
    //     return view('backend.dashboard');
    // })->middleware(['auth:admin'])->name('dashboard');

    Route::prefix('category')->name('category.')->group(function() {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/all', [CategoryController::class, 'all'])->name('all');
        Route::get('/{slug}', [CategoryController::class, 'view'])->name('view');
    });
});
