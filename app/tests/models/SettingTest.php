<?php

class SettingTest extends TestCase {

	/**
	 * Test if can update settings in mass
	 */
	public function testMassUpdates()
	{
		$toUpdate = array(
			'ali' => 'veli',
			'test_setting' => 'test_value',
		);

		$affected = Setting::massUpdate($toUpdate);

		$this->assertEquals(1, $affected);
	}

}
