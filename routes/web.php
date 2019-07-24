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

//Route for the base/root url, which redirects to the PagesController's index method
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
//Route for if the url includes "we-buy-cars" ahead of the root/base url, which redirects to the AdminController's weBuyCars method
Route::get('/we-buy-cars', ['as' => 'weBuyCars', 'uses' => 'PagesController@weBuyCars']);
//Route for if the url includes "car-details/(id number)" ahead of the root/base url, which redirects to the AdminController's carDetails method
Route::get('/car-details/{id}', ['as' => 'carDetails', 'uses' => 'PagesController@carDetails']);
//Route for if the url includes "contact-us" ahead of the root/base url, which redirects to the AdminController's contactUs method
Route::get('/contact-us', ['as' => 'contactUs', 'uses' => 'PagesController@contactUs']);
//Route for if the url includes "find-us" ahead of the root/base url, which redirects to the AdminController's findus method
Route::get('/find-us', ['as' => 'findUs', 'uses' => 'PagesController@findUs']);
//Route for if the url includes "message-sent" ahead of the root/base url, which redirects to the AdminController's messageSent method
Route::get('/message-sent', ['as' => 'messageSent', 'uses' => 'PagesController@messageSent']);
//Route for post objects sent via the we-buy-cars page, which will be sent to the PagesController's validateMail method
Route::post('/we-buy-cars', ['as' => 'validateMail', 'uses' => 'PagesController@validateMail']);
//Route for if the url includes "admin" ahead of the root/base url, which redirects to the AdminController's index method
Route::get('/admin', ['as' => 'toadmin', 'uses' => 'AdminController@index']);
//Route for if the url includes "adminlog" ahead of the root/base url, which redirects to the AdminController's index method
Route::get('/adminlog', ['as' => 'toadmin', 'uses' => 'AdminController@index']);
//Route for if the url includes "adminLogin" ahead of the root/base url, which redirects to the AdminController's index method
Route::get('/adminlogin', ['as' => 'toadmin', 'uses' => 'AdminController@index']);
//Create routes for all methods in the adminController file
Route::resource('admin', 'AdminController');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');
