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
Route::post('/cart/add/', [InventoryController::class, 'add'])->name('inventory.add');


Route::get('/', [DashboardController::class, 'index']);
Route::resource('categories', CategoryController::class);
Route::resource('inventories', InventoryController::class);

//tasya
Route::get('/history', [OrderController::class, 'viewHistory'])->name('orders.history');
Route::delete('/history/{order_id}', [OrderController::class, 'deleteOrder'])->name('orders.delete');

Route::resource('products', ProductController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('payments', PaymentsController::class);
Route::resource('users', UserController::class);
