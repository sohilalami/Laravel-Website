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

Route::get('/', 'HomeController@showHome')->name('homepage');

Route::prefix('/admin')->middleware('auth')->group(function () {
Route::get('/about', 'HomeController@showAboutUs')->name('about-us');;

Route::get('/products','ProductController@index')->name('product.list');
Route::get('/product/create', 'ProductController@create')->name('product.add');
Route::post('/product/create', 'ProductController@store')->name('product.store');

Route::get('/bedrijven', 'CompanyController@list')->name('company.list');
Route::get('/bedrijven/{id}', 'CompanyController@details')->name('company.details');
});


Auth::routes();
