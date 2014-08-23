<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

	/**
	 * Run preparation to set up before each test
	 */
	public function setUp()
	{
		parent::setUp();

		$this->prepareForTests();
	}

	/**
	 * Prepare testing database by migrating and seeding
	 */
	private function prepareForTests()
	{
	    Artisan::call('migrate');
	    Artisan::call('db:seed');
	}

}
