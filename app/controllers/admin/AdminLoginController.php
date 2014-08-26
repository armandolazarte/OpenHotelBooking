<?php

class AdminLoginController extends Controller {

	public function login()
	{
		return View::make('admin/login');
	}

	public function loginAction()
	{
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

	public function logoutAction()
	{
		Session::flush();
		return Redirect::to('admin/login');
	}
}
