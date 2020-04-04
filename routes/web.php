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

Route::get('/',  'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
  
/* Registration Routes... */
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
  
/* Password Reset Routes... */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
  
/* Email Verification Routes... */
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clients','clientcontroller@index')->name('client.show');
Route::get('/clients/add','clientcontroller@add')->name('client.add');
Route::post('/clients/insert','clientcontroller@insert')->name('client.insert');
Route::get('/clients/{id}/remove/','clientcontroller@del')->name('client.remove');
Route::get('/clients/edit/{id}','clientcontroller@edit')->name('client.edit');
Route::post('/clients/update/{id}','clientcontroller@update')->name('client.update');

Route::get('/drivers','drivercontroller@index')->name('driver.show');
Route::get('/driver/add','drivercontroller@add')->name('driver.add');
Route::post('/driver/insert','drivercontroller@insert')->name('driver.insert');
Route::get('/driver/{id}/remove/','drivercontroller@del')->name('driver.remove');
Route::get('/driver/edit/{id}','drivercontroller@edit')->name('driver.edit');
Route::post('/driver/update/{id}','drivercontroller@update')->name('driver.update');

Route::get('/products','productcontroller@index')->name('product.show');
Route::get('/product/add','productcontroller@add')->name('product.add');
Route::post('/product/insert','productcontroller@insert')->name('product.insert');
Route::get('/product/{id}/remove/','productcontroller@del')->name('product.remove');
Route::get('/product/edit/{id}','productcontroller@edit')->name('product.edit');
Route::post('/product/update/{id}','productcontroller@update')->name('product.update');

Route::get('/sales','salecontroller@index')->name('sale.show');
Route::get('/sale/add','salecontroller@add')->name('sale.add');
Route::post('/sale/insert','salecontroller@insert')->name('sale.insert');
Route::get('/sale/{id}/remove/','salecontroller@del')->name('sale.remove');
Route::get('/sale/edit/{id}','salecontroller@edit')->name('sale.edit');
Route::post('/sale/update/{id}','salecontroller@update')->name('sale.update');