<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('genders')->delete();
		DB::table('genders')->insert([
			[
				'id' => 1,
				'description' => 'Laki - laki'
			], [
				'id' => 2,
				'description' => 'Perempuan'
			]
		]);
	}
}
