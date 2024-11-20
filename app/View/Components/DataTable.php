<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTable extends Component
{
    public bool $error;
    public string $mensajeError;
    public Array $acciones;
    public bool $verAcciones;
    public int $nroCols;
    public Array $columnas;
    public Array $datos;
    public string $modulo;
    /**
     * Create a new component instance.
     */
    public function __construct($modulo, $datos, $columnas=[], $acciones=[], $registrosPorPagina=10)
    {
        $this->modulo = $modulo;
        $this->error = false;
        $this->verAcciones = count($acciones) ? true : false;
        $this->mensajeError = "";
        $this->acciones = $acciones;
        $this->datos = $datos;
        if (is_null($datos) && count($columnas)==0) {
            $this->error = true;
            $this->mensajeError = 'No hay columnas para mostrar';
            $this->datos = [];
        } else {
            if (!is_null($columnas) && count($columnas) > 0) {
                // $index = 0;
                // $cols = [];
                // $columnas_k = array_keys($datos);
                // $columnas_v = $columnas;
                // foreach ($columnas_k as $value) {
                //     if ($value == 'id') {
                //         $cols['id'] = $columnas_v['id'];
                //     } else {
                //         $cols[$value] = $columnas_v[$index];
                //     }
                // }
                $this->columnas = $columnas;
            } else {
                $cols = array_keys($datos[0]);
                $final = [];
                foreach ($cols as $value) {
                    $final[$value] = $value;
                }
                $this->columnas = $final;
            }
            //dd($this->columnas);
            $this->nroCols = count($this->columnas) + ($this->verAcciones ? 1 : 0);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
