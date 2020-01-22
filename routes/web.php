<?php

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

use App\Http\Controllers\HomeControllers;

Route::get('/', 'HomeController@showHome')->name('homepage');
Route::get('/over-ons-bedrijf', 'HomeController@showAboutUs')->name('about-us');;
Route::get('/hallo/{name}', 'HomeController@showName ')->name('show-name');;
Route::get('/product/create', 'ProductController@create')->name('product.add');
Route::post('/product/create', 'ProductController@store')->name('product.store');
