<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['Semen'],
            ['Pasir']
        ];

        for ($i = 0; $i < count($category); $i++){
            DB::table('table_category')->insert([
                'category_name' => $category[$i][0],
            ]);
        }
    }
}
