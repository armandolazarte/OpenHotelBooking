<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

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