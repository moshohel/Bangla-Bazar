<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\Frontend\PagesController;
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
//     return view('pages.home_content');
//   });


// 2 ways to link with a Controller
// 1st way -

// Route::get('/', [PagesController::class, 'index'])->name('pages.index');

// 2nd way -
// Frontend Routes
Route::get('/', 'App\Http\Controllers\Frontend\PagesController@index')->name('index');
Route::get('/contact', 'App\Http\Controllers\Frontend\PagesController@contact')->name('contact');
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
  All Products routes for frontend
|
*/
Route::get('/products', 'App\Http\Controllers\Frontend\ProductsController@index')->name('products');
Route::get('/products/{slug}', 'App\Http\Controllers\Frontend\ProductsController@show')->name('products.show');
Route::get('/search', 'App\Http\Controllers\Frontend\PagesController@search')->name('search');

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
  All Products routes for Backend
|
*/
// Admin Routes
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\Backend\PagesController@index')->name('admin.index');

    // Product Routes
    Route::prefix('/products')->group(function () {
        Route::get('/', 'App\Http\Controllers\Backend\ProductsController@index')->name('admin.products');
        Route::get('/create', 'App\Http\Controllers\Backend\ProductsController@create')->name('admin.product.create');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\ProductsController@edit')->name('admin.product.edit');
        Route::post('/create', 'App\Http\Controllers\Backend\ProductsController@store')->name('admin.product.store');
        Route::post('/edit/{id}', 'App\Http\Controllers\Backend\ProductsController@update')->name('admin.product.update');
        Route::post('/delete/{id}', 'App\Http\Controllers\Backend\ProductsController@delete')->name('admin.product.delete');
    });

    // Category Routes
    Route::group(['prefix' => '/categories'], function(){
    Route::get('/', 'App\Http\Controllers\Backend\CategoriesController@index')->name('admin.categories');
    Route::get('/create', 'App\Http\Controllers\Backend\CategoriesController@create')->name('admin.category.create');
    Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CategoriesController@edit')->name('admin.category.edit');

    Route::post('/store', 'App\Http\Controllers\Backend\CategoriesController@store')->name('admin.category.store');

    Route::post('/category/edit/{id}', 'App\Http\Controllers\Backend\CategoriesController@update')->name('admin.category.update');
    Route::post('/category/delete/{id}', 'App\Http\Controllers\Backend\CategoriesController@delete')->name('admin.category.delete');
  });

});


