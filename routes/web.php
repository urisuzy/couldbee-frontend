<?php

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


Route::get('/product', function () {
    return view('product');
});

Route::get('/search', function () {
    return view('pages.filter');
});

Route::get('/my-account/orders', function () {
    return view('pages.my-account.my-orders.list');
});

Route::get('/my-account/setting', function () {
    return view('pages.my-account.setting');
});

Route::get('/my-account/balance', function () {
    return view('pages.my-account.balance');
});

Route::get('/my-store/products', function () {
    return view('pages.store.my-product.list');
});

Route::get('/my-store/product/add', function () {
    return view('pages.store.my-product.add');
});

Route::get('/my-store/product/{id}/edit', function () {
    return view('pages.store.my-product.edit');
});

Route::get('/my-store/sales', function () {
    return view('pages.store.sales.list');
});

Route::get('/order/buy/{id}', function () {
    return view('pages.order.buy');
});

Route::get('/order/success/{id}', function () {
    return view('pages.order.success-buy');
});

Route::get('/auth/login', function () {
    return view('pages.auth.login');
});
Route::get('/auth/register', function () {
    return view('pages.auth.register');
});
Route::get('/auth/logout', function () {
    return view('pages.auth.logout');
});