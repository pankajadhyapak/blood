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

		// $this->call('UserTableSeeder');
		$this->call('DonarsTableSeeder');
		$this->call('RequestsTableSeeder');
		$this->call('MessagesTableSeeder');
	}

}