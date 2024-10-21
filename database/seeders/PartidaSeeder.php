<?php

namespace Database\Seeders;

use App\Models\Partida;
use App\Models\Resultado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partida::factory()
            ->hasResultados(18)
            ->hasCartones(30)
            ->create();
    }
}
