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

// Route::get('/', function () {
//     return view('pages.home_content');
//   });

// Admin Routes
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\AdminPagesController@index')->name('admin.index');

    // Product Routes
    Route::prefix('/products')->group(function () {
        Route::get('/', 'App\Http\Controllers\AdminProductController@index')->name('admin.products');
        Route::get('/create', 'App\Http\Controllers\AdminProductController@create')->name('admin.product.create');
        Route::get('/edit/{id}', 'App\Http\Controllers\AdminProductController@edit')->name('admin.product.edit');
        Route::post('/create', 'App\Http\Controllers\AdminProductController@store')->name('admin.product.store');
        Route::post('/edit/{id}', 'App\Http\Controllers\AdminProductController@update')->name('admin.product.update');
        Route::post('/delete/{id}', 'App\Http\Controllers\AdminProductController@delete')->name('admin.product.delete');
    });

});