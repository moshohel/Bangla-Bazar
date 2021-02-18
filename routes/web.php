<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('pages.index');
Route::get('/pages', 'App\Http\Controllers\PagesController@index');
Route::get('/contact', function () {
        return view('pages.contact');
      });
// Route::get('/', 'App\Http\Controllers\HomeController@index');

// Route::get('/', function () {
//     return view('pages.home_content');
//   });
