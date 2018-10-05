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

// Sales routes

Route::get('/sales/dashboard', 'SalesController@ShowSales')->name('dashboard');

Route::get('sales/addclient', 'SalesController@ShowAddClient')->name('add_client');