<?php

namespace App\View\Components;

use App\Models\CartonPartida;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CartonAccion extends Component
{
    public $numero;
    public $estado;
    public $jugador;
    /**
     * Create a new component instance.
     */
    public function __construct(int $numero, $carton_partida = null)
    {
        //dd($carton_partida);
        $this->numero = $numero;
        if (is_null($carton_partida)) {
            $this->estado = 'por_pagar';
            $this->jugador = '';
        } else {
            $this->estado = $carton_partida->pagado ? 'pagado' : 'por_pagar';
            $this->jugador = $carton_partida->jugador->nombre ;

        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carton-accion');
    }
}
