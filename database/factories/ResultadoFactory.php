<?php

namespace Database\Factories;

use App\Models\Partida;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resultado>
 */
class ResultadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $letra = $this->getLetter();
        return [
            'partida_id' => Partida::factory(),
            'letra' => $letra,
            'numero' => $this->getNumberForColumn($letra)
        ];
    }

    protected function getLetter(){
        $letras = ['b','i','n','g','o'];
        $index = rand(0, 4);
        return $letras[$index];
    }

    protected function getNumberForColumn($column){
        $columnas = [
            'b' => ['min' => 1, 'max' => 15],
            'i' => ['min' => 16, 'max' => 30],
            'n' => ['min' => 31, 'max' => 45],
            'g' => ['min' => 46, 'max' => 60],
            'o' => ['min' => 61, 'max' => 75],
        ];

        return rand($columnas[$column]['min'], $columnas[$column]['max']);
    }
}
