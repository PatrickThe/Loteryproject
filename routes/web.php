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
    return view('auth.register');
});

Route::get('logout', function () {
    Auth::logout();
    return view('auth.register');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('savePayment', 'HomeController@savePayment')->name('savePayment');
Route::post('/save_news', 'HomeController@save_news');
Route::get('news', 'HomeController@news');
Route::get('referrals', 'HomeController@referrals')->name('referrals');
Route::post('save_ref', 'HomeController@save_ref')->name('save_ref');
Route::get('customers', 'HomeController@customers')->name('customers');
Route::get('admin', 'HomeController@admin')->name('admin');
Route::get('invoices', 'HomeController@invoices')->name('invoices');
Route::get('add_news', 'HomeController@add_news')->name('add_news');
Route::get('morePost/{id}', 'HomeController@morePost');
Route::get('payments', 'HomeController@payments')->name('payments');
Route::get('delete/{id}','HomeController@destroy');
Route::get('edit_news/{id}','HomeController@edit_news');
Route::get('update/{id}','HomeController@update_users');
Route::get('updateadmin/{id}','HomeController@update_admin');
Route::get('paymentsReport', 'HomeController@paymentsReport')->name('paymentsReport');
Route::get('customersReport', 'HomeController@customersReport')->name('customersReport');
Route::post('/edit','HomeController@edit');








