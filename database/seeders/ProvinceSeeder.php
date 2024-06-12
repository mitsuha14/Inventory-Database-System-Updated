<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $province = [
            ['name' => 'Batanes'],
            ['name' => 'Cagayan'],
            ['name' => 'Isabela'],
            ['name' => 'Nueva Vizcaya'],
            ['name' => 'Quirino'],
            ['name' => 'Regional Office'],
            ['name' => 'COA'],
        ];

        DB::table('provinces')->insert($province);
    }
}
