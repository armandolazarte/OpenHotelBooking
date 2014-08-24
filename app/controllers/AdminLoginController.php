<?php

class AdminLoginController extends Controller {

	public function login()
	{
		if (!Request::isMethod('post')) {
			return View::make('admin/login');
		}

		$loginParams = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'type' => 'admin'
		);

		if (Auth::attempt($loginParams)) {
			return Redirect::to('admin');
		}
		
		return View::make('admin/login')
			->with('error_message', Lang::get('form.invalid_login'));
	}

	public function logout()
	{
		Session::flush();
		return Redirect::to('admin/login');
	}
}
