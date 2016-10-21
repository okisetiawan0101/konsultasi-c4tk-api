<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('districts')->delete();
		$file = database_path() . "/seeds/districts.sql";
		/*
		 * First method with DB::unprepared
		 * */
		DB::unprepared(file_get_contents($file));
	}
}
