<?php

use Illuminate\Database\Seeder;

class MaritalStatusesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('marital_statuses')->delete();
		DB::table('marital_statuses')->insert([
			[
				'id' => 1,
				'description' => 'Single'
			], [
				'id' => 2,
				'description' => 'Berpacaran'
			], [
				'id' => 3,
				'description' => 'Menikah'
			], [
				'id' => 4,
				'description' => 'Cerai'
			]
		]);
	}
}
