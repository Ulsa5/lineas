<?php

namespace Database\Seeders;

use App\Models\Telco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TelcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Telco::factory(3)->create();
    }
}
