<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountablePersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accountable_personnel = [
            ['name' => 'Vince Mark S. Agbisit'],
        ];

        DB::table('accountable_personnels')->insert($accountable_personnel);
    }
}
