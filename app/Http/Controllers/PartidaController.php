<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use App\Http\Requests\StorePartidaRequest;
use App\Http\Requests\UpdatePartidaRequest;

class PartidaController extends Controller
{
    protected $results;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartidaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $partida = Partida::find($id);
        $this->results = $partida->resultados;
        $cartones = $partida->cartones;
        $numeros = [];

        for ($j = 1; $j <= 15; $j++) {
            $b = $j;
            $i = $j + 15;
            $n = $j + 30;
            $g = $j + 45;
            $o = $j + 60;
            $numeros[$j] = [
                $b => $this->numeroSalio($b),
                $i => $this->numeroSalio($i),
                $n => $this->numeroSalio($n),
                $g => $this->numeroSalio($g),
                $o => $this->numeroSalio($o)
            ];
        }

        return view('partidas.detail', ['partida' => $partida, 'resultados' => $this->results, 'numeros' => $numeros, 'cartones' => $cartones]);
    }

    protected function numeroSalio($numero){
        foreach ($this->results as $result) {
            if ($result->numero == $numero) {
                return true;
            }
        }
        return false;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partida $partida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartidaRequest $request, Partida $partida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partida $partida)
    {
        //
    }
}
