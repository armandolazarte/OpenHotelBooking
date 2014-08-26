<?php

class TestSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('SettingTableSeeder');
	}

}

class TestUserTableSeeder extends Seeder {

	public function run()
	{
		User::create(
			array(
				'email' => 'admin@example.com',
				'password' => Hash::make('12345678'),
				'type' => 'admin',
				'first_name' => 'Mehmet',
				'last_name' => 'Uygun',
			)
		);

	}

}

class TestSettingTableSeeder extends Seeder {

	public function run()
	{
		Setting::create(
			array(
				'name' => 'ali',
				'value' => 'asfafsafas',
			)
		);

		Setting::create(
			array(
				'name' => 'test_setting',
				'value' => 'test_value',
			)
		);
	}

}