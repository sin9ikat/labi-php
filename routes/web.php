<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Broadcast::routes();




Route::resource('users',\App\Http\Controllers\UserController::class);
Route::resource('categories',\App\Http\Controllers\CategoryController::class);
Route::resource('products',\App\Http\Controllers\ProductController::class);
Route::resource('orders',\App\Http\Controllers\OrderController::class);
Route::post('/Orders/OrderCreate', [\App\Http\Controllers\ProductController::class, 'OrderCreate'])->name('CreateOrder');
Route::post('products/search', [\App\Http\Controllers\ProductController::class, 'search'])->name('products.search');

Route::get('/productsp',[\App\Http\Controllers\ProductController::class,'indexP'])->name('catalog');
Route::get('/productsp/{product}',[\App\Http\Controllers\ProductController::class,'showp'])->name('show');

Route::post('/products/sort', [\App\Http\Controllers\ProductController::class, 'SortByASC'])->name('products.SortByASC');
Route::post('/products/sort-desc', [\App\Http\Controllers\ProductController::class, 'SortByDESC'])->name('products.SortByDESC');
Route::post('/products/sort-by-price-desc', [\App\Http\Controllers\ProductController::class, 'sortByPriceDescending'])->name('products.sortByPriceDescending');
Route::post('/products/sort-by-price-asc', [\App\Http\Controllers\ProductController::class, 'sortByPriceAscending'])->name('products.sortByPriceAscending');
Route::get('/products/sort-by-category/{categoryId}', [\App\Http\Controllers\ProductController::class, 'sortByCategory'])->name('products.sortByCategory');





Route::middleware('guest')
    ->controller(AuthController::class)
    ->group(function () {
        Route::get('/register','showRegisterForm')->name('register');
        Route::get('/login','showLoginForm')->name('login');
        Route::post('/register_processing','register')->name('register_processing');
        Route::post('/login_processing','login')->name('login_processing');
    });
Route::post('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/',function () {return view('layouts.app'); });



