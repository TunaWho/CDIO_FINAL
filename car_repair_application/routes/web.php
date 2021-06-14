<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login_form');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register_form');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::post('dashboard', 'DashboardController@districtByProvince')->name('get_district');
Route::post('search-result', 'DashboardController@searchAdvance')->name('search');

Route::group(['middleware' => ['auth.customer']], function () {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('detail/{user}/partners', 'DetailController@index')->name('detail');
    Route::post('detail/{user}/partners', 'DetailController@sendRequest')->name('detail.sendRequest');
    Route::resource('invoices', 'InvoiceController');
});
