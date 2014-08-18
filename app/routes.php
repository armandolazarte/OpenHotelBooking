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

Route::any('/admin', function()
{
	echo 'Admin Main Page';
});

Route::any('/admin/login', array('before' => 'admin_login', 'uses' => 'AdminLoginController@login'));
