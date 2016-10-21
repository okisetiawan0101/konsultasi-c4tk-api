<?php

use Illuminate\Database\Seeder;

class ConsultationTypesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('consultation_types')->delete();
		DB::table('consultation_types')->insert([
			[
				'id' => 1,
				'description' => 'Private Chat dengan Konselor',
				'name' => 'Private Chat'
			], [
				'id' => 2,
				'description' => 'Voice Call',
				'name' => 'Telepon dengan Konselor'
			], [
				'id' => 3,
				'description' => 'Video Call',
				'name' => 'Video Call dengan Konselor'
			], [
				'id' => 4,
				'description' => 'F2F',
				'name' => 'Bertemu langsung dengan Konselor'
			]
		]);
	}
}
