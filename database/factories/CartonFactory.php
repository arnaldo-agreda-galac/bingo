<?php

namespace Database\Factories;

use App\Models\Carton;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carton>
 */
class CartonFactory extends Factory
{
    private $carton;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->carton['numero'] = function (array $attributes){
            return 'Carton ' . ($attributes['id'] ?? 1);
        };
        $this->carton['b0'] = $this->getNumberForColumn('b');
        $this->carton['b1'] = $this->getNotRepeated('b', 'b1');
        $this->carton['b2'] = $this->getNotRepeated('b', 'b2');
        $this->carton['b3'] = $this->getNotRepeated('b', 'b3');
        $this->carton['b4'] = $this->getNotRepeated('b', 'b4');
        $this->carton['i0'] = $this->getNumberForColumn('i');
        $this->carton['i1'] = $this->getNotRepeated('i', 'i1');
        $this->carton['i2'] = $this->getNotRepeated('i', 'i2');
        $this->carton['i3'] = $this->getNotRepeated('i', 'i3');
        $this->carton['i4'] = $this->getNotRepeated('i', 'i4');
        $this->carton['n0'] = $this->getNumberForColumn('n');
        $this->carton['n1'] = $this->getNotRepeated('n', 'n1');
        $this->carton['n2'] = 0;
        $this->carton['n3'] = $this->getNotRepeated('n', 'n3');
        $this->carton['n4'] = $this->getNotRepeated('n', 'n4');
        $this->carton['g0'] = $this->getNumberForColumn('g');
        $this->carton['g1'] = $this->getNotRepeated('g', 'g1');
        $this->carton['g2'] = $this->getNotRepeated('g', 'g2');
        $this->carton['g3'] = $this->getNotRepeated('g', 'g3');
        $this->carton['g4'] = $this->getNotRepeated('g', 'g4');
        $this->carton['o0'] = $this->getNumberForColumn('o');
        $this->carton['o1'] = $this->getNotRepeated('o', 'o1');
        $this->carton['o2'] = $this->getNotRepeated('o', 'o2');
        $this->carton['o3'] = $this->getNotRepeated('o', 'o3');
        $this->carton['o4'] = $this->getNotRepeated('o', 'o4');

        return $this->carton;
    }

    public function configure(){
        return $this->afterCreating(function (Carton $carton) {
            $carton->numero = 'Carton ' . $carton->id;
            $carton->save();
        });
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

    protected function getNotRepeated($column, $current){
        $index = substr($current, -1);
        $records = [];

        for ($i=$index-1; $i>=0; --$i) {
            $records[] = $this->carton[$column . $i];
        }

        do {
            $number = $this->getNumberForColumn($column);
        } while (in_array($number, $records));

        return $number;
    }
}
