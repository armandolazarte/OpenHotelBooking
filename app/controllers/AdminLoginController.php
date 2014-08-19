<?php

class AdminLoginController extends Controller {

	public function login()
	{
		if (Request::isMethod('post')) {
			if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'), 'type' => 'admin'))) {
				return Redirect::to('admin');
			} else {
				return View::make('admin/login')->with('error_message', Lang::get('form.error_login'));
			}
		}

		return View::make('admin/login');
	}

	public function logout()
	{
		Session::flush();
		return Redirect::to('admin/login');
	}
}
