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

Route::get('sales/addcontact', 'SalesController@ShowAddContact')->name('add_contact');

Route::get('sales/managecontacts', 'SalesController@ShowManageContacts')->name('manage_contact');

Route::get('sales/editclient', 'SalesController@ShowEditClient')->name('edit_client');

Route::get('sales/help', 'SalesController@ShowSalesHelp')->name('help');

//route om de database te laten zien
Route::get('/development', 'DevelopmentController@index')->name('development');
//route om de database te updaten
route::post('/development/', 'DevelopmentController@done')->name('development.done');

route::get('/login', 'Logincontroller@index')->name('login');
route::post('/login', 'Logincontroller@login')->name('login.login');
// route::delete('/sales/{appointment_number}/delete','SalesController@DeleteAppointment')->name('delete');