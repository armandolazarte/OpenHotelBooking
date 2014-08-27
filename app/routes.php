<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('prefix' => 'admin'), function()
{
	Route::group(array('before' => 'admin'), function()
	{
		Route::get('/', 'AdminController@dashboard');
		Route::get('system/setting', 'AdminSystemController@setting');
		Route::post('system/setting', 'AdminSystemController@settingAction');
		Route::get('logout', 'AdminLoginController@logoutAction');
	});
	Route::group(array('before' => 'admin_login'), function()
	{
		Route::get('login', 'AdminLoginController@login');
		Route::post('login', 'AdminLoginController@loginAction');
	});
});
