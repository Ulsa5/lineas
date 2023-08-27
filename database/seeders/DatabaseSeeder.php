<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TelcoSeeder::class,
            AdvisorSeeder::class,
            OccupationSeeder::class,
            DepartmentSeeder::class,
            ClientSeeder::class,
            SmartphoneSeeder::class,
            PlanSeeder::class,
            LineSeeder::class,
            EnterpriseSeeder::class

            
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
