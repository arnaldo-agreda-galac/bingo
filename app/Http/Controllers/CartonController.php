<?php

namespace App\Http\Controllers;

use App\Models\Carton;
use App\Http\Requests\StoreCartonRequest;
use App\Http\Requests\UpdateCartonRequest;

class CartonController extends Controller
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
    public function store(StoreCartonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $carton = Carton::find($id);
        $nombre_carton = $carton->nombre;

        //dd($carton);
        return view('cartones.detail', ['carton' => $carton]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carton $carton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartonRequest $request, Carton $carton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carton $carton)
    {
        //
    }
}
