<?php

namespace Database\Seeders;

use App\Models\OperatingUnit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Users
        User::factory()->create([
   
        ]);

        // Seed other data
        $this->call([
            TypeSeeder::class,
            DivisionSeeder::class,
            MakeSeeder::class,
            OperatingUnitsSeeder::class,
            ProvinceSeeder::class,
            StatusSeeder::class,
            AccountablePersonnelSeeder::class,
            UserSeeder::class,
        ]);
    }
}
