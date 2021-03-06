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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('product.index')->get('/product', 'ProductController@index');
Route::name('product.show')->get('/product/{product}', 'ProductController@show');

Route::name('contact.store')->post('/contact', 'ContactController@store');