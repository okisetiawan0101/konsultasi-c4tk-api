<?php

use Illuminate\Database\Seeder;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('educations')->delete();
	    DB::table('educations')->insert([
		    [
			    'id' => 1,
			    'description' => 'Tidak Sekolah'
		    ], [
			    'id' => 2,
			    'description' => 'SD'
		    ], [
			    'id' => 3,
			    'description' => 'SMP'
		    ], [
			    'id' => 4,
			    'description' => 'SMA'
		    ], [
			    'id' => 5,
			    'description' => 'D1/D2/D3'
		    ], [
			    'id' => 6,
			    'description' => 'D4/S1'
		    ], [
			    'id' => 7,
			    'description' => 'S2'
		    ], [
			    'id' => 8,
			    'description' => 'S3'
		    ]
	    ]);
    }
}
