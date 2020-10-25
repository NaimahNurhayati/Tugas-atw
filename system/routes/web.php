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

Route::get('/naimah', function () {
    return "saya naimah";
});


Route::get('/template', function () {
    return view('template.base');
});


Route::get('/template.detail', function () {
    return view('template.detail');
});

Route::get('/template.login', function () {
    return view('template.login');
});

Route::get('/template.produk', function () {
    return view('template.produk');
});

Route::get('/templateadmin', function () {
    return view('templateadmin.admin');
});

Route::get('home', function () {
    return view('home');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('pakaian', function () {
    return view('pakaian');
});

Route::get('aksesoris', function () {
    return view('aksesoris');
});

Route::get('kosmetik', function () {
    return view('kosmetik');
});

Route::get('hijab', function () {
    return view('hijab');
});

Route::get('sepatu', function () {
    return view('sepatu');
});

Route::get('flatshoes', function () {
    return view('flatshoes');
});

Route::get('promo', function () {
    return view('promo');
});
