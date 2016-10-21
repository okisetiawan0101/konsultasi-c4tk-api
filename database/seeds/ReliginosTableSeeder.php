<?php

use Illuminate\Database\Seeder;

class ReliginosTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('religions')->delete();
		DB::table('religions')->insert([
			[
				'id' => 1,
				'description' => 'Islam'
			], [
				'id' => 2,
				'description' => 'Kristen'
			], [
				'id' => 3,
				'description' => 'Katholik'
			], [
				'id' => 4,
				'description' => 'Buddha'
			], [
				'id' => 5,
				'description' => 'Hindu'
			], [
				'id' => 6,
				'description' => 'Kong Hu Cu'
			]
		]);
	}
}
