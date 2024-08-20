<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $department = [
            ['name' => 'Admitting'],
            ['name' => 'Ancillary'],
            ['name' => 'Diagnostic Imaging'],
            ['name' => 'Emergency Room'],
            ['name' => 'Intensive Care Unit'],
            ['name' => 'Labor Room'],
            ['name' => 'Operating Room'],
            ['name' => 'Station 1'],
            ['name' => 'Station 2'],
            ['name' => 'Station 3'],
            ['name' => 'Station 4'],
            ['name' => 'Station 5'],
        ];

        DB::table('departments')->insert($department);
    }
}
