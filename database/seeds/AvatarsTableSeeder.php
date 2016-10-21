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
                'description' => 'testing',
                "url" => "http://tersebut.com/assets/images/avatar1.jpg"
            ], [
                'id' => 2,
                'description' => 'testing',
                "url" => "http://tersebut.com/assets/images/avatar1.jpg"
            ], [
                'id' => 3,
                'description' => 'testing',
                "url" => "http://tersebut.com/assets/images/avatar1.jpg"
            ]
        ]);
    }
}
