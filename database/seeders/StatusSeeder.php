<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name' => 'Unserviceable'],
            ['name' => 'Working'],
            ['name' => 'Repair'],
            ['name' => 'Verification'],
            ['name' => 'Lost'],
        ];

        DB::table('statuses')->insert($status);
    }
}
