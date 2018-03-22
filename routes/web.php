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

Route::get('/insertStock', 'StockController@insertOne');
Route::get('/stock', 'StockController@show');

Route::post('/edit', 'StockController@edit');
Route::post('/update', 'StockController@updateOne');
Route::post('/stock', 'StockController@inserted');

