<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = [
            ['Jakarta'],
            ['Bogor'],
            ['Depok'],
            ['Tangerang'],
            ['Bekasi'],
            ['Bandung'],
            ['Jogjakarta'],
            ['Surabaya'],
            ['Bali']   
        ];

        for ($i = 0; $i < count($area); $i++) {
			DB::table('table_area')->insert([
                'city_name' => $area[$i][0],
			]);
		}
    }
}
