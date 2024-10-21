<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Http\Requests\StoreResultadoRequest;
use App\Http\Requests\UpdateResultadoRequest;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
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
    public function store(StoreResultadoRequest $request)
    {
        dd($request);
        $partida_id = $request->partida_id;
        $resultado = new Resultado();

        $resultado->save();
        return redirect('partidas/' . $partida_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resultado $resultado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resultado $resultado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResultadoRequest $request, Resultado $resultado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resultado $resultado)
    {
        //
    }

    public function process(Request $request) {
        $partida_id = $request->partida;
        $numero = $request->numero;
        //dd($request);

        if ($request->accion == 0) {
            $resultado = new Resultado();
            $resultado->partida_id = $partida_id;
            $resultado->letra = $this->getLetter($numero);
            $resultado->numero = $numero;
            $resultado->save();
        } else {
            $resultado = Resultado::where('partida_id', $partida_id)
                    ->where('numero', $numero)
                    ->first();

                    //dd($resultado);
            $resultado->delete();
        }
        return redirect('partidas/' . $partida_id);
    }

    protected function getLetter($number){
        if ($number <= 15) {
            return 'B';
        } else if ($number > 15 && $number <= 30) {
            return 'I';
        } else if ($number > 30 && $number <= 45) {
            return 'N';
        } else if ($number > 45 && $number <= 60) {
            return 'G';
        } else {
            return 'O';
        }
    }
}
