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

Route::get('/products', 'EstoqController@index');
Route::get('/products/create', 'EstoqController@create');
Route::post('/products', 'EstoqController@store');
Route::get('/products/{id}/edit', 'EstoqController@edit');
Route::put('products/{id}', 'EstoqController@update');
Route::delete('products/{id}', 'EstoqController@destroy');
Route::get('/products/{id}', 'EstoqController@show');

