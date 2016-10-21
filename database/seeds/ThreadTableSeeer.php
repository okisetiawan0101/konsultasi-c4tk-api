<?php

use Illuminate\Database\Seeder;

class ThreadTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	private function seedThread()
	{
		DB::table('threads')->delete();
		DB::table('threads')->insert([
			[
				'id' => 1,
				'category_id' => 1,
				'consultation_type_id' => 1,
				'user_id' => 1,
				'counselor_id' => 1,
				'description' => 'aku galau kakak',
				'is_done' => false
			],
			[
				'id' => 2,
				'category_id' => 1,
				'consultation_type_id' => 1,
				'user_id' => 1,
				'counselor_id' => 1,
				'description' => 'aku galau kakak',
				'is_done' => true
			]
		]);
	}

	private function seedThreadUserRating()
	{
		DB::table('thread_user_ratings')->delete();
		DB::table('thread_user_ratings')->insert([[
			'id' => 1,
			'thread_id' => 2,
			'rating' => 5
		]]);
	}

	private function seedThreadCounselorRating()
	{
		DB::table('thread_counselor_ratings')->delete();
		DB::table('thread_counselor_ratings')->insert([[
			'id' => 1,
			'thread_id' => 2,
			'rating' => 5
		]]);

	}

	public function run()
	{
		$this->seedThread();
		$this->seedThreadCounselorRating();
		$this->seedThreadUserRating();
	}
}
