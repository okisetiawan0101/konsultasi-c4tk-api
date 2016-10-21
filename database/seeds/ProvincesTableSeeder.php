<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('provinces')->delete();
		$file = database_path() . "/seeds/provinces.sql";
		/*
		 * First method with DB::unprepared
		 * */
		DB::unprepared(file_get_contents($file));
	}
}
