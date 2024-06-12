<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $make = [
            ['name' => 'Television'],
            ['name' => 'Laptop'],
            ['name' => 'Scanner'],
            ['name' => 'Printer'],
            ['name' => 'Computer Set'],
            ['name' => 'Camera'],
            ['name' => 'Projector'],
            ['name' => 'Network Device'],
            ['name' => 'Server'],
            ['name' => 'Drone'],
            ['name' => 'Tablet'],
            ['name' => 'Video Conferencing System'],
            ['name' => 'Fingerprint Scanner'],
            ['name' => 'Audio System'],
            ['name' => 'VHS'],
            ['name' => 'Mobile Phone'],
            ['name' => 'Fax Machine'],
            ['name' => 'Voice Recorder'],
            ['name' => 'Xerox Machine'],
            ['name' => 'UPS'],
            ['name' => 'Speaker'],
        ];

        DB::table('makes')->insert($make);
    }
}
