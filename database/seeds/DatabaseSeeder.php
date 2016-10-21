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
		if (env('APP_ENV') == 'production') {
			$this->call(ProvincesTableSeeder::class);
			$this->call(CitiesTableSeeder::class);
			$this->call(DistrictsTableSeeder::class);
			$this->call(VillagesTableSeeder::class);
		} else {
			$this->call(LocationTableSeederTesting::class);
		}
		
        $this->call(SuggestionSeeder::class);
        $this->call(InstitutionTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		$this->call(ConsultationTypesTableSeeder::class);
		$this->call(EducationsTableSeeder::class);
		$this->call(GendersTableSeeder::class);
		$this->call(MaritalStatusesTableSeeder::class);
		$this->call(ReliginosTableSeeder::class);
        $this->call(OccupationsTableSeeder::class);
        $this->call(AvatarsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
