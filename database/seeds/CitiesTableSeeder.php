<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('cities')->delete();
	    $file = database_path() . "/seeds/cities.sql";
	    /*
		 * First method with DB::unprepared
		 * */
	    DB::unprepared(file_get_contents($file));
    }
}
