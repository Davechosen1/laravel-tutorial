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

//customer routes
Route::resource('customers', 'CustomersController');

//loan product routes
Route::get('loan-products/register', 'LoanProductsController@create');
Route::post('loan-products', 'LoanProductsController@store');
Route::get('loan-products/list', 'LoanProductsController@index');
Route::get('loan-products/{id}/', 'LoanProductsController@show');
Route::post('loan-products/{id}/edit', 'LoanProductsController@edit');
Route::delete('loan-products/{id}/delete', 'LoanProductsController@destroy');

//loan application routes
Route::get('loan-application/register', 'LoanApplicationController@create');
Route::post('loan-application', 'LoanApplicationController@store');
Route::get('loan-application/list', 'LoanApplicationController@index');
Route::get('loan-application/{id}/', 'LoanApplicationController@show');
Route::post('loan-application/{id}/edit', 'LoanApplicationController@edit');
Route::delete('loan-application/{id}/delete', 'LoanApplicationController@destroy');


