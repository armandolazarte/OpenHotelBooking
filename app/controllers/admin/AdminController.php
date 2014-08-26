<?php

class AdminController extends Controller
{
	public function dashboard()
	{
		return View::make('admin/dashboard');
	}
}
