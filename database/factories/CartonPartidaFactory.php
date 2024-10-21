<?php

namespace Database\Factories;

use App\Models\Carton;
use App\Models\Jugador;
use App\Models\Partida;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partida>
 */
class PartidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carton_id' => Carton::factory(),
            'partida_id' => Partida::factory(),
            'jugador_id' => Jugador::factory(),
            'pagado' => false
        ];
    }
}
