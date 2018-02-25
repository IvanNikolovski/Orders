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

Route::get('/', 'ProductController@index');
Route::get('/create', 'ProductController@create');
Route::post('/create', 'ProductController@store');
Route::get('/view/{slug}', 'ProductController@view');
Route::get('/products/current', 'ProductController@current');

Route::get('/edit/{slug}', 'ProductController@edit');
Route::post('/edit/{slug}', 'ProductController@update');
Route::post('/remove/{slug}', 'ProductController@remove');
Route::get('/createOrder', 'PreorderController@create');
Route::post('/createOrder', 'PreorderController@store');




