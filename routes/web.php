<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Middleware\IsLoggedin;
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

Route::middleware([IsLoggedin::class])->group(function () {
    Route::get('/order/buy/{id}', [OrderController::class, 'buy']);
    Route::post('/order/buy/success', [OrderController::class, 'confirmation']);

    Route::get('/my-account/orders', [OrderController::class, 'listOrders']);
    Route::get('/my-account/order/update/{id}/{status}', [OrderController::class, 'updateOrder']);

    Route::get('/my-store/sales', [StoreController::class, 'listSales']);
    Route::get('/my-store/products', [StoreController::class, 'listProducts']);
    Route::post('/my-store/product/add', [StoreController::class, 'addProduct']);
    Route::get('/my-store/product/{id}/delete', [StoreController::class, 'deleteProduct']);
    Route::get('/my-store/product/{id}/edit', [StoreController::class, 'viewEdit']);
    Route::post('/my-store/product/edit', [StoreController::class, 'updateProduct']);
    Route::get('/my-store/product/add', function () {
        return view('pages.store.my-product.add');
    });

    Route::get('/my-account/balance', [BalanceController::class, 'index']);
    Route::post('/my-account/balance/deposit', [BalanceController::class, 'deposit']);

    Route::get('/my-account/setting', [AccountController::class, 'viewEdit']);
    Route::post('/my-account/setting', [AccountController::class, 'updateUser']);

    Route::get('/search', [HomeController::class, 'search']);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'product']);

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::get('/auth/logout', [AuthController::class, 'logout']);
Route::get('/auth/login', function () {
    return view('pages.auth.login');
});
Route::get('/auth/register', function () {
    return view('pages.auth.register');
});
