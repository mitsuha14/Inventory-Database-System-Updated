<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            ['name' => 'Ethernet to SFP Bridging Converter'],
            ['name' => 'Small Form Factor Pluggable'],
            ['name' => 'Optical Distribution Frame'],
            ['name' => 'Server Accessories'],
            ['name' => 'All-in-one PC'],
            ['name' => 'Document Scanner'],
            ['name' => 'Processor'],
            ['name' => 'CPU'],
            ['name' => 'Television Set'],
            ['name' => 'Smart TV'],
            ['name' => 'Desktop Computer'],
            ['name' => 'Netbook'],
            ['name' => 'LCD Projector'],
            ['name' => 'Notebook Computer'],
            ['name' => 'Motherboard'],
            ['name' => 'DSLR'],
            ['name' => 'Digicam'],
            ['name' => 'Biometric'],
            ['name' => 'Voice Switch'],
            ['name' => 'Monochrome Printer'],
            ['name' => 'Multifunction Printer'],
            ['name' => 'Camcorder'],
            ['name' => 'Smart Phone'],
            ['name' => 'IP Phone'],
            ['name' => 'Access Point'],
            ['name' => 'N/A'],
        ];

        DB::table('types')->insert($type);
    }
}
