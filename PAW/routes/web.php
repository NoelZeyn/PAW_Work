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
// routes/web.php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\KeranjangController;

Route::resource('categories', CategoryController::class);
Route::resource('inventories', InventoryController::class);

//tasya
Route::get('/orders/history', [OrderController::class, 'viewHistory'])->name('orders.history');
Route::delete('/orders/{order_id}', [OrderController::class, 'deleteOrder'])->name('orders.delete');

Route::resource('products', ProductController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('payments', PaymentsController::class);
Route::resource('users', UserController::class);


//aksa
Route::get('/keranjang/add', [KeranjangController::class, 'tambahKeKeranjang'])->name('keranjang.add');
Route::put('/keranjang/update/{id}', [KeranjangController::class, 'perbaruiItemKeranjang'])->name('keranjang.update');
Route::delete('/keranjang/delete/{id}', [KeranjangController::class, 'hapusItemKeranjang'])->name('keranjang.delete');