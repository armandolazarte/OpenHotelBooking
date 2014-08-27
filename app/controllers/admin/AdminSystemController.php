<?php

class AdminSystemController extends Controller {

	public function setting()
	{
		return View::make('admin/setting');
	}

	public function settingAction()
	{
		$data = array();
		$validator = Validator::make(
			Input::all(), 
			array(
				'hotel_name' => 'required|max:128',
			), 
			array(), 
			array(
				'hotel_name' => Lang::get('admin.hotel_name'),
			)
		);

		if ($validator->fails()) {
			$data['messages'] = $validator->messages();
			return View::make('admin/setting')->with($data);
		} else {
			$data['alert'] = 'Success';
			$data['alert_type'] = 'alert-success';
			return View::make('admin/setting')->with($data);
		}
		return View::make('admin/setting');
	}
}
