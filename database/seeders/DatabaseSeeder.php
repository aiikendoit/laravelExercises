<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Equipment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Department::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@ex.ie',
        // ]);

        $this->call(EquipmentSeeder::class);
        $this->call(DepartmentSeeder::class);

    }
}
