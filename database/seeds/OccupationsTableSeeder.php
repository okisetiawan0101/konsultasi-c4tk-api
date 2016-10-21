<?php

use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('occupations')->delete();
	    DB::table('occupations')->insert([
		    [
			    'id' => 1,
			    'description' => 'Pelajar'
		    ], [
			    'id' => 2,
			    'description' => 'Karyawan Swasta'
		    ], [
			    'id' => 3,
			    'description' => 'PNS'
		    ], [
			    'id' => 4,
			    'description' => 'Mengurus Rumah Tangga'
		    ], [
			    'id' => 5,
			    'description' => 'Lain - lain'
		    ]
	    ]);
    }
}
