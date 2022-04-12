<?php

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
    return view('app');
});

//products controller
Route::resource('products', 'ProductController');
Route::resource('cart', 'CartController');
Route::resource('notifications', 'NotificationsController');
Route::resource('order', 'OrderController');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('orders', 'OrdersController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', 'ProductController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('category', 'CategoryController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('size', 'SizeController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('user-management', 'UserManagementController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
