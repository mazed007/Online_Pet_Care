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

Route::get('/','PageController@welcome')->name('welcome');
Route::get('contact','PageController@contact')->name('contact');

Route::get('tips','PageController@tips')->name('tips');


Route::get('emergency','PageController@emergency')->name('emergency');

Route::get('search','PageController@search')->name('search');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

 Route::get('/deleteDoc/{id}','Controller@deleteDoc');

 Route::get('/deleteAppoint/{id}','Controller@deleteAppoint');

 Route::get('/deleteReserv/{id}','Controller@deleteReserv');

 Route::get('/delete/{id}','Controller@deletePatient');

Route::group(['prefix' => 'doctor'], function () {
  Route::get('/login', 'DoctorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'DoctorAuth\LoginController@login');
  Route::post('/logout', 'DoctorAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'DoctorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'DoctorAuth\RegisterController@register');

  Route::post('/password/email', 'DoctorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'DoctorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'DoctorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'DoctorAuth\ResetPasswordController@showResetForm');
  Route::post('send','PageController@send');
});

Route::group(['prefix' => 'patient'], function () {
  Route::get('/login', 'PatientAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'PatientAuth\LoginController@login');
  Route::post('/logout', 'PatientAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'PatientAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'PatientAuth\RegisterController@register');

  Route::post('/password/email', 'PatientAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'PatientAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'PatientAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'PatientAuth\ResetPasswordController@showResetForm');

    Route::post('reservation','Controller@reserv');
    Route::post('appoinment','Controller@appoinment');
    Route::post('addPetInfo','Controller@addPetInfo');
});
