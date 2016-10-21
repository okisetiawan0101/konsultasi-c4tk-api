<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suggestions')->delete();
        DB::table('suggestions')->insert([
            [
                "id" => 1,
                "description" => "Keluarga",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 2,
                "description" => "Sekolah",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 3,
                "description" => "Sosial / Pertemanan",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 4,
                "description" => "Pekerjaan",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 5,
                "description" => "Percintaan",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 6,
                "description" => "Keuangan",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 7,
                "description" => "Kekerasan / Kriminalitas",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 8,
                "description" => "Personal",
                "parent_id" => null,
                "urgent_rating" => "1"
            ],
            [
                "id" => 9,
                "description" => "Putus",
                "parent_id" => 1,
                "urgent_rating" => "1"
            ],
            [
                "id" => 10,
                "description" => "Di Pukul",
                "parent_id" => 9,
                "urgent_rating" => "10"
            ],
            [
                "id" => 11,
                "description" => "Selingkuh",
                "parent_id" => 9,
                "urgent_rating" => "5"
            ],
        ]);
    }
}
