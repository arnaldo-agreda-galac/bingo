<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Numero extends Component
{
    public $numero;
    public $es_libre;
    public $marcado;
    /**
     * Create a new component instance.
     */
    public function __construct($number = 'libre', $marcar= false)
    {
        $this->es_libre = $number == 'libre' || $number == 0;
        $this->numero = ($this->es_libre) ? 'LIBRE' : ($number < 10 ? '0' . $number : $number);
        $this->marcado = $marcar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.numero');
    }
}
