<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientKategoriController;
use App\Http\Controllers\ClientProdukController;

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

// Route::get('template', [TemplateController::class, 'showTemplate']);
// Route::get('template.detail', [TemplateController::class, 'showTemplatedetail']);
// Route::get('template.produk', [TemplateController::class, 'showTemplateproduk']);
Route::get('template.login', [TemplateController::class, 'showTemplatelogin']);
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);

// produk
Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
// akhir produk

// kategori
Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/create', [KategoriController::class, 'create']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);
// akhir kategori

// user
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);
// akhir user

// clientkategori
Route::get('template', [ClientKategoriController::class, 'showTemplate']);
// akhir clientkategori

// clientproduk
Route::get('template.produk', [ClientProdukController::class, 'showTemplateproduk']);
Route::get('template/{produk}', [ClientProdukController::class, 'show']);
// akhir clientproduk

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegister']);
