<?php

use Illuminate\Database\Seeder;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->delete();
        DB::table('avatars')->insert([
            [
                'id' => 1,
                'description' => 'Geek Boy',
                "url" => "http://tersebut.com/assets/images/1.png"
            ], [
                'id' => 2,
                'description' => 'Normal Boy',
                "url" => "http://tersebut.com/assets/images/2.png"
            ], [
                'id' => 3,
                'description' => 'Punk',
                "url" => "http://tersebut.com/assets/images/3.png"
            ], [
		        'id' => 4,
		        'description' => 'Geek Girl',
		        "url" => "http://tersebut.com/assets/images/4.png"
	        ], [
		        'id' => 5,
		        'description' => 'Pony Tail Girl',
		        "url" => "http://tersebut.com/assets/images/5.png"
	        ], [
		        'id' => 6,
		        'description' => 'Hijab',
		        "url" => "http://tersebut.com/assets/images/6.png"
	        ]
        ]);
    }
}
