<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $division = [
            ['name' => 'ORD'],
            ['name' => 'FAD'],
            ['name' => 'LGCDD'],
            ['name' => 'LGMED'],
        ];

        DB::table('divisions')->insert($division);
    }
}
