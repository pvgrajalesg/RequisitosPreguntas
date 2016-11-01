<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Normal routes...
Route::get('/', 'HomeController@getHome');
Route::get('account/', 'HomeController@getAccount');
Route::post('account/', 'HomeController@updateAccount');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Password reset routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
//Administrator Routes
  //Model project Routes
  Route::get('/modelproject', 'Analyst\ModelProjectController@index');
  Route::get('/modelproject/register/', 'Analyst\ModelProjectController@create');
  Route::post('/modelproject/update/', 'Analyst\ModelProjectController@update');
  //Route::get('/modelproject', 'Developer\ModelProjectController@index');
  //Route::get('/modelproject/register/', 'Developer\ModelProjectController@create');
  //Route::post('/modelproject/update/', 'Developer\ModelProjectController@update');
  //Route::get('/modelproject', 'Tester\ModelProjectController@index');
  //Route::get('/modelproject/register/', 'Tester\ModelProjectController@create');
  //Route::post('/modelproject/update/', 'Tester\ModelProjectController@update');
  //Certification Routes
  Route::get('/certification', 'Analyst\CertificateController@index');
  Route::get('/certification/register/', 'Analyst\CertificateController@create');
  Route::post('/certification/register/', 'Analyst\CertificateController@store');
  Route::get('/certification/update/', 'Analyst\CertificateController@update');
  //Route::get('/certification', 'Developer\CertificateController@index');
  //Route::get('/certification/register/', 'Developer\CertificateController@create');
  //Route::post('/certification/register/', 'Developer\CertificateController@store');
  //Route::get('/certification/update/', 'Developer\CertificateController@update');
  //Route::get('/certification', 'Tester\CertificateController@index');
  //Route::get('/certification/register/', 'Tester\CertificateController@create');
  //Route::post('/certification/register/', 'Tester\CertificateController@store');
  //Route::get('/certification/update/', 'Tester\CertificateController@update');


