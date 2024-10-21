<?php

namespace Database\Seeders;

use App\Models\Carton;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carton::factory()->count(100)->create();
    }
}
