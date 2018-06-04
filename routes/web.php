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

Route::get('customerregistration', function () {
    return view('customers/customerform');
});

Route::get('customers/register', 'CustomersController@create');
Route::post('customers', 'CustomersController@store');
Route::get('customers/list', 'CustomersController@index');
Route::get('customers/newpage', 'CustomersController@newlayout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
