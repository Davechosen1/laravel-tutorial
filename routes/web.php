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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('customers/register', 'CustomersController@create');
Route::post('customers', 'CustomersController@store');
Route::get('customers/list', 'CustomersController@index');
Route::get('customers/newpage', 'CustomersController@newlayout');
Route::get('loan-products/register', 'LoanProductsController@create');
Route::post('loan-products', 'LoanProductsController@store');
Route::get('loan-products/list', 'LoanProductsController@index');
Route::get('loan-application/register', 'LoanApplicationController@create');
Route::post('loan-application', 'LoanApplicationController@store');
Route::get('loan-application/list', 'LoanApplicationController@index');


