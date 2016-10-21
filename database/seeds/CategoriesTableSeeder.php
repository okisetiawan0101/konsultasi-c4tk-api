<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categories')->delete();
		DB::table('categories')->insert([
			[
				'id' => 1,
				'description' => 'Keluarga'
			], [
				'id' => 2,
				'description' => 'Sekolah'
			], [
				'id' => 3,
				'description' => 'Sosial / Pertemanan'
			], [
				'id' => 4,
				'description' => 'Pekerjaan'
			], [
				'id' => 5,
				'description' => 'Percintaan'
			], [
				'id' => 6,
				'description' => 'Keuangan'
			], [
				'id' => 7,
				'description' => 'Kekerasan / Kriminalitas'
			], [
				'id' => 8,
				'description' => 'Personal'
			]
		]);
	}
}
