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
    return view('sales/dashboard');
});

// Sales routes

Route::get('/sales/dashboard', 'SalesController@ShowSales')->name('dashboard');

Route::get('sales/addclient', 'SalesController@ShowAddClient')->name('add_client');

Route::get('sales/addcontact', 'SalesController@ShowAddContact')->name('add_contact');

Route::get('sales/managecontacts', 'SalesController@ShowManageContacts')->name('manage_contact');

Route::get('sales/editclient', 'SalesController@ShowEditClient')->name('edit_client');

Route::get('sales/help', 'SalesController@ShowSalesHelp')->name('help');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/development', 'DevelopmentController@index');

route::post('/development/done', 'DevelopmentController@done')->name('development.done');