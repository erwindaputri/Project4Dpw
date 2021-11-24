<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'showHome']);
Route::get('about', [HomeController::class, 'showAbout']);
Route::get('contact', [HomeController::class, 'showContact']);
Route::get('vegetables', [HomeController::class, 'showVegetables']);


// admin 

Route::get('dashboard', [AdminController::class, 'showadmin']);
Route::get('kategori', [AdminController::class, 'kategori']);
Route::get('profile', [AdminController::class, 'profile']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('login', function () {
    return view('login');
});

Route::get('template', function () {
    return view('admin.template.base');
});




