<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\RoleController;
use App\Http\Controllers\Products\UserController;
use App\Http\Controllers\Products\OrderController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\CategoryController;
use App\Http\Controllers\Products\PermissionController;

use App\Http\Controllers\Frontend\IndexController;

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

// Route::get('/', function () {
//    return view('frontend.index');
//     // return view('welcome');
// });

Route::get('/', [IndexController::class, 'Index']);

/*======================route space for hashmi============================*/
Route::group(['prefix' => 'admin'], function() {
    Route::resource('category', CategoryController::class, ['names' => 'category']);
    Route::resource('product', ProductController::class, ['names' => 'product']);
    Route::resource('order', OrderController::class, ['names' => 'order']);
    Route::resource('user', UserController::class, ['names' => 'user']);
    Route::resource('role', RoleController::class, ['names' => 'role']);
    Route::resource('permission', PermissionController::class, ['names' => 'permission']);
});















/*======================route space for nabib============================*/
// Route::resource('category', CategoryController::class);

// Route::get('/', function(){
//     // return view('frontend.layouts.app');
//     return view('frontend.category');
// });


// Route::get('/cart', function(){
//     return view('frontend.cart');
// });

// // Route::get('/product', function(){
// //     return view('frontend.product.allproduct');
// // });

// Route::get('/productdetails', function(){
//     return view('frontend.product.productdetails');
// });
// Route::get('/checkout', function(){
//     return view('frontend.checkout');
// });

// Route for frontend 

Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails']);
Route::get('/product/category/{id}/{slug}', [IndexController::class, 'CatWiseProduct']);






Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('profile', [App\Http\Controllers\HomeController::class, 'show'])->name('profile');
Route::put('profile/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('profile.update');






