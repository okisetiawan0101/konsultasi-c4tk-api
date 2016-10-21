<?php

use Illuminate\Database\Seeder;

class VillagesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('villages')->delete();
		$file = database_path() . "/seeds/villages.sql";

		DB::unprepared(file_get_contents($file));
	}
}
