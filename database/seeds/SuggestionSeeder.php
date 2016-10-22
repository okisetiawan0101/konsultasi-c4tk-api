<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestionSeeder extends Seeder {

	private function seedSuggesstion()
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
				"description" => "keluarga saya  \"broken home\"",
				"parent_id" => 1,
				"urgent_rating" => "5"
			],
			[
				"id" => 10,
				"description" => "merasa tidak dihargai dalam keluarga",
				"parent_id" => 1,
				"urgent_rating" => "4"
			],
			[
				"id" => 11,
				"description" => "cemburu dengan saudara saya",
				"parent_id" => 1,
				"urgent_rating" => "1"
			],
			[
				"id" => 12,
				"description" => "kami sebagai keluarga jarang berkomunikasi / tidak sama sekali",
				"parent_id" => 1,
				"urgent_rating" => "5"
			],
			[
				"id" => 13,
				"description" => "bertengkar dengan orang tua",
				"parent_id" => 1,
				"urgent_rating" => "1"
			],
			[
				"id" => 14,
				"description" => "ternyata saya bukan anak mereka",
				"parent_id" => 1,
				"urgent_rating" => "1"
			],
			[
				"id" => 15,
				"description" => "bertengkar dengan saudara kandung",
				"parent_id" => 1,
				"urgent_rating" => "1"
			]
		]);
	}

	private function seedSuggestionCounselor()
	{
		DB::table('suggestion_counselor')->delete();
		DB::table('suggestion_counselor')->insert([
			[
				"suggestion_id" => 10,
				"counselor_id" => 1
			],
			[
				"suggestion_id" => 11,
				"counselor_id" => 2
			],
		]);
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->seedSuggesstion();
		$this->seedSuggestionCounselor();
	}
}
