<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
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

    # Category
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/all', [CategoryController::class, 'all'])->name('all');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');

        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('destroy');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    });

    # Sub Category
    Route::prefix('sub-cat')->name('sub-cat.')->controller(SubCategoryController::class)->group(function() {
        Route::get('/', 'index')->name('index'); // add by me
        Route::post('/store', 'store')->name('store'); // add by me

        Route::get('/all', 'getAllSubCat')->name('all'); // add by me
        Route::get('/{id}', 'view')->name('view'); // add by me
        Route::delete('{category}', 'destroy')->name('destroy'); // add by me
        Route::post('/update/{id}','update')->name('update'); // add by me
    });
});
