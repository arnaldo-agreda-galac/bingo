<?php

namespace App\View\Components;

use App\Models\Carton as ModelsCarton;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carton extends Component
{
    public $numeros;
    public $identificador;
    /**
     * Create a new component instance.
     */
    public function __construct(ModelsCarton $carton)
    {
        $this->identificador = $carton->numero;
        $this->numeros = $this->getNumeros($carton);
    }

    protected function getNumeros(ModelsCarton $carton){

        return [
            'b0' => $carton->b0,
            'b1' => $carton->b1,
            'b2' => $carton->b2,
            'b3' => $carton->b3,
            'b4' => $carton->b4,
            'i0' => $carton->i0,
            'i1' => $carton->i1,
            'i2' => $carton->i2,
            'i3' => $carton->i3,
            'i4' => $carton->i4,
            'n0' => $carton->n0,
            'n1' => $carton->n1,
            'n2' => $carton->n2,
            'n3' => $carton->n3,
            'n4' => $carton->n4,
            'g0' => $carton->g0,
            'g1' => $carton->g1,
            'g2' => $carton->g2,
            'g3' => $carton->g3,
            'g4' => $carton->g4,
            'o0' => $carton->o0,
            'o1' => $carton->o1,
            'o2' => $carton->o2,
            'o3' => $carton->o3,
            'o4' => $carton->o4
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carton');
    }
}
