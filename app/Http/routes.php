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
Route::get('my-account/', 'HomeController@getAccount');
Route::post('my-account/', 'HomeController@updateAccount');

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
  //Project Manager Routes
  Route::get('/project-managers', 'Admin\ProjectManagerController@index');
  Route::get('/project-managers/register/', 'Admin\ProjectManagerController@create');
  Route::post('/project-managers/register/', 'Admin\ProjectManagerController@store');
  Route::get('/project-managers/update/{id}/', 'Admin\ProjectManagerController@edit');
  Route::post('/project-managers/update/{id}/', 'Admin\ProjectManagerController@update');
  //Companies Routes
  Route::get('/companies', 'Admin\CompanyController@index');
  Route::get('/companies/register/', 'Admin\CompanyController@create');
  Route::post('/companies/register/', 'Admin\CompanyController@store');
  Route::get('/companies/update/{id}/', 'Admin\CompanyController@edit');
  Route::post('/companies/update/{id}/', 'Admin\CompanyController@update');
