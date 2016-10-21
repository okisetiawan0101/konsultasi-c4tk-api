<?php

use Illuminate\Database\Seeder;

class CounselorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counselors')->delete();
        DB::table('counselors')->insert([
            [
                "id" => "1",
                "name" => "Warso Sapa",
                "nick_name" => "Warso",
                "email" => "warso.sapa@gmail.com",
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
                "sinch_id" => "123123123",
                "institution_id" => "1"
            ],
            [
                "id" => "2",
                "name" => "Joko Sapa",
                "nick_name" => "Joko",
                "email" => "joko.sapa@gmail.com",
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
                "sinch_id" => "123123123",
                "institution_id" => "1"
            ],
        ]);
    }
}
