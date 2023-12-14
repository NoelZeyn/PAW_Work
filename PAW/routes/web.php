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
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentsController;

Route::resource('categories', CategoryController::class);
Route::resource('inventories', InventoryController::class);
Route::resource('orders', OrderController::class);
Route::resource('order-details', OrderDetailsController::class);
Route::resource('products', ProductController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('payments', PaymentsController::class);
Route::resource('users', UserController::class);
