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

Route::get('/', 'ProductsController@index');

Route::resource('products', 'ProductsController', ['only' => [
    'index', 'show'
]]);

Route::get('/cart/view', 'CartController@index');
Route::get('/cart/store/{sku}', 'CartController@store');
Route::get('/cart/destroy/{key}', 'CartController@destroy');