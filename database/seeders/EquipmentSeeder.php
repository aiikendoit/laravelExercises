<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $equipment = [
            ['name' => 'Transport Stretcher'],
            ['name' => 'Patient Bed'],
            ['name' => 'Wheel Chair'],
            ['name' => 'Baggage Cart'],
            ['name' => 'IV Stand'],
            ['name' => 'Oxygen Portable'],
        ];

        DB::table('equipment')->insert($equipment);
    }
}
