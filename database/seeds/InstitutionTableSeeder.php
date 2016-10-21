<?php

use Illuminate\Database\Seeder;

class InstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->delete();
        DB::table('institutions')->insert([
            [
                'id' => 1,
                'name' => 'yesHEis'
            ], [
                'id' => 2,
                'name' => 'institution 2'
            ], [
                'id' => 3,
                'name' => 'institution 3'
            ]
        ]);
    }
}
