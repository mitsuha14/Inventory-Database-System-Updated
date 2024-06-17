<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class zInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventoryItems = [
            [
                'accountable_personnel_id' => 1,
                'division_id' => 1,
                'province_id' => 1,
                'operating_unit_id' => 1,
                'make_id' => 1,
                'type_id' => 1,
                'status_id' => 1,
                'brand' => 'BrandA',
                'model' => 'ModelA',
                'serial_number' => 'SN00001',
                'description' => 'Description for item 1',
                'property_number' => 123456,
                'unit_value' => 1500.50,
                'acquisition_date' => '2023-01-01',
                'year_acquired' => 2023,
                'balance_per_card' => 10,
                'on_hand_per_count' => 8,
                'source' => 'SourceA',
                'remarks' => 'Remarks for item 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more inventory items as needed
        ];

        DB::table('inventory')->insert($inventoryItems);
    }
}
