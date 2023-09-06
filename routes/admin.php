<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Admin" middleware group. Make something great!
|
*/

// Login
Route::get('login', 'LoginController@login')->name('login')->middleware('guest');
Route::post('postLogin', 'LoginController@postLogin')->name('postLogin')->middleware('guest');

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/logout', 'HomeController@logout')->name('logout');
    // Product
    Route::get('/product', 'ProductController@index')->name('product');
    Route::get('product/create', 'ProductController@create')->name('product.create');
    Route::post('product/store', 'ProductController@store')->name('product.store');
    Route::get('product/show/{id}', 'ProductController@show')->name('product.show');
    Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::post('product/update/{id}', 'ProductController@update')->name('product.update');
    Route::get('product/destroy/{id}', 'ProductController@destroy')->name('product.destroy');

    // Images
    Route::controller('ImagController')->prefix('image')->name('image.')->group(function () {
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::get('order', 'ProductController@order')->name('contact-us.order');
    Route::get('order/{id}', 'ProductController@updatesee')->name('contact-us.updatesee');
    Route::get('order/delete/{id}', 'ProductController@delete')->name('contact-us.delete');

    // Brand
    Route::resource('brand', 'BrandController');

    // Setting
    Route::get('setting', 'SettingController@index')->name('setting');
    Route::post('setting/update', 'SettingController@update')->name('setting.update');
});
