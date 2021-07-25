<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index']);

Route::view('/login', 'login');
Route::post('/login', [UserController::class, 'login']);

Route::view('/register', 'register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/details/{id}', [ProductController::class, 'details']);

Route::post('/add_to_cart', [ProductController::class, 'addToCart']);

Route::get('/search', [ProductController::class, 'search']);

Route::get('/cart-list', [ProductController::class, 'cartList']);

Route::get('remove/{id}', [ProductController::class, 'removeProductFromCart']);

Route::get('/ordernow', [ProductController::class, 'orderNow']);
Route::post('/orderplace', [ProductController::class, 'orderPlace']);
Route::get('/myorders', [ProductController::class, 'myOrders']);

