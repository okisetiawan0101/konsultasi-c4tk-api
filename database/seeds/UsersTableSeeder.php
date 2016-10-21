<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                "id" => "1",
                "name" => "Bagus Setiawan",
                "nick_name" => "Iwan",
                "email" => "bagus.setiawan@gmail.com",
                "password" => bcrypt("admin"),
                "birth_date" => "1991-01-01",
                "birth_place" => "Sukabumi",
                "address" => "Jl. Palem indah no 14",
                "village_id" => "3174040006",
                "gender_id" => "1",
                "occupation_id" => "1",
                "education_id" => "1",
                "marital_status_id" => "1",
                "religion_id" => "1",
                "avatar_id" => "1",
                "profile" => "1",
                "sinch_id" => "1",
                "facebook_id" => "1"
            ]
        ]);
    }
}
