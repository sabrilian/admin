<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderanController;
use App\Models\Orderan;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('profile', function () {
    return view('layouts.dashboard.profile');
});



Route::get('/admin/dashboard', [ProductController::class, 'halaman'])->name('admin.products.halaman');




Route::get('/admin/order', [OrderanController::class, 'getProductsFromApi']);


Route::prefix('admin')->group(function () {
    Route::resource('products', ProdukController::class);
});

Route::get('/admin/produk', [ProdukController::class, 'getProductsFromApi'])->name('products.produk');

use App\Http\Controllers\UserController;

Route::get('/admin/user', [UserController::class, 'getProductsFromApi']);

use App\Http\Controllers\ReportController;

Route::get('/admin/reports', [ReportController::class, 'index'])->name('admin.reports');

use App\Http\Controllers\SettingsController;

Route::get('/admin/settings', [SettingsController::class, 'index'])->name('admin.settings');

Route::get('coba', function () {
    return view('layouts.dashboard.main');
});



Route::get('/product-html', [ProductController::class, 'getProductHtml']);

