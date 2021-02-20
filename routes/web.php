<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPagesController;
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


// Route::get('/', [HomeController::class, 'index'])->name('pages.index');
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');
Route::get('/products', 'App\Http\Controllers\PagesController@products')->name('products');

// Route::get('/', 'App\Http\Controllers\HomeController@index');

// Route::get('/', function () {
//     return view('pages.home_content');
//   });

// Admin Routes
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\AdminPagesController@index')->name('admin.index');
    Route::get('/product/create', 'App\Http\Controllers\AdminPagesController@product_create')->name('admin.product.create');
});