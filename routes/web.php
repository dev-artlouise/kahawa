<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    $products   = DB::select('SELECT products.id AS product_id, product_name, product_description, product_image, products.category_id,
        category.id AS category_id, category.name AS category_name,  category.description AS category_description FROM products 
        INNER JOIN categories AS category ON products.category_id =  category.id');

    return view('welcome')->with([
        'products'  => $products,
    ]); 
});


Route::get('search', 'ProductController@search');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
	Route::get('/home', 'HomeController@index')->name('home');
});


Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('products', 'ProductController');
    Route::resource('cart', 'CartController');
    Route::resource('notifications', 'NotificationsController');
    Route::resource('order', 'OrderController');

    
    Route::namespace('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('order', 'OrdersController');
        Route::resource('order-history', 'OrdersController');
    });

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('products', 'ProductController');
    });

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('category', 'CategoryController');
    });

    Route::namespace('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('size', 'SizeController');
    });

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('user-management', 'UserManagementController');
    });

});
