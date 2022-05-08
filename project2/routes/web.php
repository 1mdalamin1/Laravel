<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserGroupsController;
use App\Http\Controllers\UserPaymentsController;
use App\Http\Controllers\UserPurchasesController;
use App\Http\Controllers\UserReceiptsController;
use App\Http\Controllers\UserSalesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.confirm');


Route::group(['middleware' => 'auth'], function(){

    Route::get('dashboard', function () {
        return Auth::user();
        return view('welcome');
    });

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    // Route::get('users', [UsersController::class, 'index']);
    Route::get('groups/create', [UserGroupsController::class, 'create']);
    Route::post('groups', [UserGroupsController::class, 'store']);
    Route::get('groups', [UserGroupsController::class, 'index'])->name('groups');
    Route::delete('groups/{id}', [UserGroupsController::class, 'destroy']);

    Route::resource('users', UsersController::class); // except -> create route without show


    Route::get('users/{id}/sales', [UserSalesController::class, 'index'])->name('user.sales');

    Route::post('users/{id}/invoices', [UserSalesController::class, 'createInvoice'])->name('user.sales.store');
    Route::get('users/{id}/invoices/{invoice_id}', [UserSalesController::class, 'invoice'])->name('user.sales.invoice_details');
    Route::delete('users/{id}/invoices/{invoice_id}', [UserSalesController::class, 'destroy'])->name('user.sales.destroy');
    Route::post('users/{id}/invoices/{invoice_id}', [UserSalesController::class, 'addItem'])->name('user.sales.invoices.add_item');
    Route::delete('users/{id}/invoices/{invoice_id}/{item_id}', [UserSalesController::class, 'destroyItem'])->name('user.sales.invoices.delete_item');



    Route::get('users/{id}/purchases', [UserPurchasesController::class, 'index'])->name('users.purchases');

    Route::get('users/{id}/payments', [UserPaymentsController::class, 'index'])->name('users.payments');
    Route::post('users/{id}/payments', [UserPaymentsController::class, 'store'])->name('user.payments.store');
    Route::delete('users/{id}/payments/{payment_id}', [UserPaymentsController::class, 'destroy'])->name('user.payments.destroy');


    Route::get('users/{id}/receipts', [UserReceiptsController::class, 'index'])->name('users.receipt');
    Route::post('users/{id}/receipts', [UserReceiptsController::class, 'store'])->name('user.receipts.store');
    Route::delete('users/{id}/{receipt_id}', [UserReceiptsController::class, 'destroy'])->name('user.receipts.destroy');


    Route::get('users/{id}', [UserSalesController::class, 'index'])->name('user.show'); // dumie controlar


    //Route::resource('users', UsersController::class, ['except' => ['show'] ]); // except -> create route without show
    //Route::resource('users', UsersController::class, ['only' => ['show', 'destroy'] ]); // only -> create route only show , destroy

    /*
    7 in 1 This Route::resource('users', UsersController::class); in blow
    Route::get('users', [UsersController::class, 'index']);
    Route::POST('users', [UsersController::class, 'store']);
    Route::POST('users/create', [UsersController::class, 'create']);
    Route::POST('users/{user}', [UsersController::class, 'show']);
    Route::POST('users/{user}', [UsersController::class, 'update']);
    Route::POST('users/{user}', [UsersController::class, 'destroy']);
    Route::POST('users/{user}/edit', [UsersController::class, 'edit']);
    */

    Route::resource('categories', CategoryController::class, ['except' => ['show'] ]);
    Route::resource('products', ProductController::class);

});

   # Group Routers
// Route::prefix('order')->name('order.')->controller(OrderController::class)->group(function () {

//     Route::get('/', 'index')->name('index');
//     Route::get('/details/{order}', 'details')->name('details');
//     Route::post('/status/{order}', 'status')->name('status');
// });
