<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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

Route::get('template', [TemplateController::class, 'showTemplate']);
Route::get('template.detail', [TemplateController::class, 'showTemplatedetail']);
Route::get('template.produk', [TemplateController::class, 'showTemplateproduk']);
Route::get('template.login', [TemplateController::class, 'showTemplatelogin']);
Route::get('beranda', [HomeController::class, 'showBeranda']);


Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);

Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('register', [AuthController::class, 'showRegister']);