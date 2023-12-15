<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeranjangController;


Route::post('/cart/add/', [InventoryController::class, 'add'])->name('inventory.add');


Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('categories', CategoryController::class);
Route::resource('inventories', InventoryController::class);

//tasya
Route::get('/history', [OrderController::class, 'viewHistory'])->name('orders.history');
Route::delete('/history/{order_id}', [OrderController::class, 'deleteOrder'])->name('orders.delete');

Route::resource('products', ProductController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('payments', PaymentsController::class);

Route::get('/payments/{id}', 'PaymentsController@show')->name('payments.show');

Route::resource('users', UserController::class);

//aksa
Route::post('/keranjang/tambah', [KeranjangController::class, 'tambahKeKeranjang']);
Route::put('/keranjang/{id}/perbarui', [KeranjangController::class, 'perbaruiItemKeranjang']);
Route::delete('/keranjang/{id}/hapus', [KeranjangController::class, 'hapusItemKeranjang']);

Route::resource('keranjang', KeranjangController::class);