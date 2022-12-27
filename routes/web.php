<?php

use App\Http\Controllers\Products\CategoryController;
use App\Http\Controllers\Products\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
    // return view('welcome');
});

/*======================route space for hashmi============================*/
Route::group(['prefix' => 'admin'], function() {
    Route::resource('category', CategoryController::class, ['names' => 'category']);
    Route::resource('product', ProductController::class, ['names' => 'product']);
});















/*======================route space for nabib============================*/
// Route::resource('category', CategoryController::class);

Route::get('/', function(){
    // return view('frontend.layouts.app');
    return view('frontend.category');
});


Route::get('/cart', function(){
    return view('frontend.cart');
});

// Route::get('/product', function(){
//     return view('frontend.product.allproduct');
// });

Route::get('/productdetails', function(){
    return view('frontend.product.productdetails');
});
Route::get('/checkout', function(){
    return view('frontend.checkout');
});





















Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');






