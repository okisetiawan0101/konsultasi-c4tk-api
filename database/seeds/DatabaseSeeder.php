<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(ProvincesTableSeeder::class);
		$this->call(CitiesTableSeeder::class);
		$this->call(DistrictsTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		$this->call(ConsultationTypesTableSeeder::class);
		$this->call(EducationsTableSeeder::class);
		$this->call(GendersTableSeeder::class);
		$this->call(MaritalStatusesTableSeeder::class);
		$this->call(ReliginosTableSeeder::class);
	}
}
