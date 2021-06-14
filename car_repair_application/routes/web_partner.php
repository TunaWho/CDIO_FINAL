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

Route::group(['middleware' => ['auth.partner']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('/dashboard', 'DashboardController@acceptRequest')->name('accept.request');
    Route::get('/statistics', 'StatisticController@index')->name('statistic');
    Route::resource('/services', 'ServiceRepairController');
    Route::get('/users-payment', 'PaymentController@index')->name('invoice');
    Route::get('/topups', 'TopupController@index')->name('topup');
    Route::post('/topups', 'TopupController@topup')->name('topup');
    Route::resource('settings', 'ProfileController');
    Route::post('settings', 'ProfileController@districtByProvince')->name('get_district');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::resource('services-type', 'ServiceRepairController');
});
