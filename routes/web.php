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
Route::prefix('products')->group(function () {
  Route::get('/', 'App\Http\Controllers\Frontend\ProductsController@index')->name('products');
  Route::get('/{slug}', 'App\Http\Controllers\Frontend\ProductsController@show')->name('products.show');
  Route::get('/new/search', 'App\Http\Controllers\Frontend\PagesController@search')->name('search');

  //Category Routes
  Route::get('/categories', 'App\Http\Controllers\Frontend\CategoriesController@index')->name('categories.index');
  Route::get('/category/{id}', 'App\Http\Controllers\Frontend\CategoriesController@show')->name('categories.show');
});


/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
  All Products routes for Backend
|
*/

// User Routes
Route::group(['prefix' => 'user'], function(){
  Route::get('/token/{token}', 'App\Http\Controllers\Frontend\VerificationController@verify')->name('user.verification');
  Route::get('/dashboard', 'App\Http\Controllers\Frontend\UsersController@dashboard')->name('user.dashboard');
  Route::get('/profile', 'App\Http\Controllers\Frontend\UsersController@profile')->name('user.profile');
  Route::post('/profile/update', 'App\Http\Controllers\Frontend\UsersController@profileUpdate')->name('user.profile.update');
  });

// Cart Routes
Route::group(['prefix' => 'carts'], function(){
  Route::get('/', 'App\Http\Controllers\Frontend\CartsController@index')->name('carts');
  Route::post('/store', 'App\Http\Controllers\Frontend\CartsController@store')->name('carts.store');
  Route::post('/update/{id}', 'App\Http\Controllers\Frontend\CartsController@update')->name('carts.update');
  Route::post('/delete/{id}', 'App\Http\Controllers\Frontend\CartsController@destroy')->name('carts.delete');
});

// Checkout Routes
Route::group(['prefix' => 'checkout'], function(){
  Route::get('/', 'App\Http\Controllers\Frontend\CheckoutsController@index')->name('checkouts');
  Route::post('/store', 'App\Http\Controllers\Frontend\CheckoutsController@store')->name('checkouts.store');
  });


// Admin Routes
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\Backend\PagesController@index')->name('admin.index');

    // Admin Login Routes
    Route::get('/login', 'App\Http\Controllers\Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'App\Http\Controllers\Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/logout/submit', 'App\Http\Controllers\Auth\Admin\LoginController@logout')->name('admin.logout');

    // Password Email Send
    Route::get('/password/reset', 'App\Http\Controllers\Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/resetPost', 'App\Http\Controllers\Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

    // Password Reset
    Route::get('/password/reset/{token}', 'App\Http\Controllers\Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'App\Http\Controllers\Auth\Admin\ResetPasswordController@reset')->name('admin.password.reset.post');

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

    // Brand Routes
    Route::group(['prefix' => '/brands'], function(){
      Route::get('/', 'App\Http\Controllers\Backend\BrandsController@index')->name('admin.brands');
      Route::get('/create', 'App\Http\Controllers\Backend\BrandsController@create')->name('admin.brand.create');
      Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BrandsController@edit')->name('admin.brand.edit');

      Route::post('/store', 'App\Http\Controllers\Backend\BrandsController@store')->name('admin.brand.store');

      Route::post('/brand/edit/{id}', 'App\Http\Controllers\Backend\BrandsController@update')->name('admin.brand.update');
      Route::post('/brand/delete/{id}', 'App\Http\Controllers\Backend\BrandsController@delete')->name('admin.brand.delete');
    });

    // Division Routes
    Route::group(['prefix' => '/divisions'], function(){
      Route::get('/', 'App\Http\Controllers\Backend\DivisionsController@index')->name('admin.divisions');
      Route::get('/create', 'App\Http\Controllers\Backend\DivisionsController@create')->name('admin.division.create');
      Route::get('/edit/{id}', 'App\Http\Controllers\Backend\DivisionsController@edit')->name('admin.division.edit');

      Route::post('/store', 'App\Http\Controllers\Backend\DivisionsController@store')->name('admin.division.store');

      Route::post('/division/edit/{id}', 'App\Http\Controllers\Backend\DivisionsController@update')->name('admin.division.update');
      Route::post('/division/delete/{id}', 'App\Http\Controllers\Backend\DivisionsController@delete')->name('admin.division.delete');
    });

    // District Routes
    Route::group(['prefix' => '/districts'], function(){
      Route::get('/', 'App\Http\Controllers\Backend\DistrictsController@index')->name('admin.districts');
      Route::get('/create', 'App\Http\Controllers\Backend\DistrictsController@create')->name('admin.district.create');
      Route::get('/edit/{id}', 'App\Http\Controllers\Backend\DistrictsController@edit')->name('admin.district.edit');

      Route::post('/store', 'App\Http\Controllers\Backend\DistrictsController@store')->name('admin.district.store');

      Route::post('/district/edit/{id}', 'App\Http\Controllers\Backend\DistrictsController@update')->name('admin.district.update');
      Route::post('/district/delete/{id}', 'App\Http\Controllers\Backend\DistrictsController@delete')->name('admin.district.delete');
    });

    // Orders Routes
  Route::group(['prefix' => '/orders'], function(){
    Route::get('/', 'App\Http\Controllers\Backend\OrdersController@index')->name('admin.orders');
    Route::get('/view/{id}', 'App\Http\Controllers\Backend\OrdersController@show')->name('admin.order.show');
    Route::post('/delete/{id}', 'App\Http\Controllers\Backend\OrdersController@delete')->name('admin.order.delete');

    Route::post('/completed/{id}', 'App\Http\Controllers\Backend\OrdersController@completed')->name('admin.order.completed');

    Route::post('/paid/{id}', 'App\Http\Controllers\Backend\OrdersController@paid')->name('admin.order.paid');
    Route::post('/charge-update/{id}', 'App\Http\Controllers\Backend\OrdersController@chargeUpdate')->name('admin.order.charge');

    Route::get('/invoice/{id}', 'App\Http\Controllers\Backend\OrdersController@generateInvoice')->name('admin.order.invoice');

  });

});

// API Routes
Route::get('get-districts/{id}', function ($id) {
    return json_encode(App\Models\District::where('division_id', $id)->get());
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
