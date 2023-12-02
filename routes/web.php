<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/aboutMe', function () {
    return view('aboutMe');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/checkout-done', function () {
    return view('checkout-done');
});

Route::get('/user-info', function () {
    return view('user-info');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});