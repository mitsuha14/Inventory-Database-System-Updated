<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatingUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operatingUnit = [
            ['name' => 'RICTU'],
            ['name' => 'MSS'],
            ['name' => 'Legal Unit'],
            ['name' => 'RPDMU'],
            ['name' => 'Records'],
            ['name' => 'Personnel'],
            ['name' => 'Accounting'],
            ['name' => 'Budget'],
            ['name' => 'GSS'],
            ['name' => 'LGRC'],
            ['name' => 'LGRRC'],
            ['name' => 'Cash'],
            ['name' => 'RPOC'],
            ['name' => 'LGCDU'],
            ['name' => 'LGMEU'],
            ['name' => 'FASCU'],
            ['name' => 'PDMU'],
            ['name' => 'FAU'],
        ];

        DB::table('operating_units')->insert($operatingUnit);
    }
}
