<?php

use Illuminate\Database\Seeder;

class LocationTableSeederTesting extends Seeder
{
    private function seedProvince()
    {
        DB::table('provinces')->delete();
        DB::table('provinces')->insert([
            ['id' => '31','description' => 'DKI JAKARTA'],
            ['id' => '32','description' => 'JAWA BARAT'],
            ['id' => '33','description' => 'JAWA TENGAH'],
        ]);
    }

    private function seedCity()
    {
        DB::table('cities')->delete();
        DB::table('cities')->insert([
            ['id' => '3171','province_id' => '31','description' => 'KOTA JAKARTA SELATAN'],
            ['id' => '3172','province_id' => '31','description' => 'KOTA JAKARTA TIMUR'],
            ['id' => '3173','province_id' => '31','description' => 'KOTA JAKARTA PUSAT'],
            ['id' => '3174','province_id' => '31','description' => 'KOTA JAKARTA BARAT'],
            ['id' => '3175','province_id' => '31','description' => 'KOTA JAKARTA UTARA'],
            ['id' => '3201','province_id' => '32','description' => 'KABUPATEN BOGOR'],
            ['id' => '3202','province_id' => '32','description' => 'KABUPATEN SUKABUMI'],
            ['id' => '3301','province_id' => '33','description' => 'KABUPATEN CILACAP'],
            ['id' => '3302','province_id' => '33','description' => 'KABUPATEN BANYUMAS']
        ]);
    }

    private function seedDistrict()
    {
        DB::table('districts')->delete();
        DB::table('districts')->insert([
            ['id' => '3171010','city_id' => '3171','description' => 'JAGAKARSA'],
            ['id' => '3171020','city_id' => '3171','description' => 'PASAR MINGGU'],
            ['id' => '3172010','city_id' => '3172','description' => 'PASAR REBO'],
            ['id' => '3172020','city_id' => '3172','description' => 'CIRACAS'],
            ['id' => '3173010','city_id' => '3173','description' => 'TANAH ABANG'],
            ['id' => '3173020','city_id' => '3173','description' => 'MENTENG'],
            ['id' => '3174010','city_id' => '3174','description' => 'KEMBANGAN'],
            ['id' => '3174020','city_id' => '3174','description' => 'KEBON JERUK'],
            ['id' => '3174040','city_id' => '3174','description' => 'GROGOL PETAMBURAN'],
            ['id' => '3175010','city_id' => '3175','description' => 'PENJARINGAN'],
            ['id' => '3175030','city_id' => '3175','description' => 'TANJUNG PRIOK'],
            ['id' => '3201010','city_id' => '3201','description' => 'NANGGUNG'],
            ['id' => '3201020','city_id' => '3201','description' => 'LEUWILIANG'],
            ['id' => '3202010','city_id' => '3202','description' => 'CIEMAS'],
            ['id' => '3202020','city_id' => '3202','description' => 'CIRACAP']
        ]);
    }

    private function seedVillage()
    {
        DB::table('villages')->delete();
        DB::table('villages')->insert([
            ['id' => '3171010001','district_id' => '3171010','description' => 'CIPEDAK'],
            ['id' => '3171010002','district_id' => '3171010','description' => 'SRENGSENG SAWAH'],
            ['id' => '3171020001','district_id' => '3171020','description' => 'CILANDAK TIMUR'],
            ['id' => '3171020002','district_id' => '3171020','description' => 'RAGUNAN'],
            ['id' => '3172010001','district_id' => '3172010','description' => 'PEKAYON'],
            ['id' => '3172010002','district_id' => '3172010','description' => 'KALISARI'],
            ['id' => '3172020001','district_id' => '3172020','description' => 'CIBUBUR'],
            ['id' => '3172020002','district_id' => '3172020','description' => 'KELAPA DUA WETAN'],
            ['id' => '3173010001','district_id' => '3173010','description' => 'GELORA'],
            ['id' => '3173020001','district_id' => '3173020','description' => 'MENTENG'],
            ['id' => '3173020002','district_id' => '3173020','description' => 'PEGANGSAAN'],
            ['id' => '3174010001','district_id' => '3174010','description' => 'JOGLO'],
            ['id' => '3174020001','district_id' => '3174020','description' => 'SUKABUMI SELATAN'],
            ['id' => '3174020002','district_id' => '3174020','description' => 'SUKABUMI UTARA'],
            ['id' => '3174040002','district_id' => '3174040','description' => 'TANJUNG DUREN SELATAN'],
            ['id' => '3174040003','district_id' => '3174040','description' => 'TOMANG'],
            ['id' => '3174040004','district_id' => '3174040','description' => 'GROGOL'],
            ['id' => '3174040005','district_id' => '3174040','description' => 'JELAMBAR'],
            ['id' => '3174040006','district_id' => '3174040','description' => 'WIJAYA KUSUMA'],
            ['id' => '3174040007','district_id' => '3174040','description' => 'JELAMBAR BARU'],
            ['id' => '3175010001','district_id' => '3175010','description' => 'KAMAL MUARA'],
            ['id' => '3175010002','district_id' => '3175010','description' => 'KAPUK MUARA'],
            ['id' => '3175030001','district_id' => '3175030','description' => 'SUNTER AGUNG'],
            ['id' => '3201010001','district_id' => '3201010','description' => 'MALASARI'],
            ['id' => '3201020001','district_id' => '3201020','description' => 'PURASARI'],
            ['id' => '3202010001','district_id' => '3202010','description' => 'CIBENDA'],
            ['id' => '3202020001','district_id' => '3202020','description' => 'GUNUNGBATU']
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedProvince();
        $this->seedCity();
        $this->seedDistrict();
        $this->seedVillage();
    }
}
