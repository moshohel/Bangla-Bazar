<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Cart Routes
Route::group(['prefix' => 'carts'], function(){
    Route::get('/', 'App\Http\Controllers\API\CartsController@index')->name('carts');
    Route::post('/store', 'App\Http\Controllers\API\CartsController@store')->name('carts.store');
    Route::post('/update/{id}', 'App\Http\Controllers\API\CartsController@update')->name('carts.update');
    Route::post('/delete/{id}', 'App\Http\Controllers\API\CartsController@destroy')->name('carts.delete');
  });