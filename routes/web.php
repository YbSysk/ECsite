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

Route::get('/order', 'OrderController@index');

Route::get('/', function() {
    return view('orders/index');
});

Route::get('/', 'OrderController@index');