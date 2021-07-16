<?php

namespace App\Http\Controllers;

use App\Levantamiento;
use Illuminate\Http\Request;

class LevantamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request;
        //Agregar las imagenes al servidor
        $fachada = $data['fachada']->store('upload-levantamiento','public');
        $medidor = $data['medidor']->store('upload-levantamiento','public');
        $azotea = $data['azotea']->store('upload-levantamiento','public');
        $objeto_afecta = $data['objeto_afecta']->store('upload-levantamiento','public');
        $perforacion = $data['perforacion']->store('upload-levantamiento','public');
        $inversor = $data['inversor']->store('upload-levantamiento','public');

        //Variables para los field
        $material = $data['material'];
        $espesor = $data['espesor'];
        $recubrimiento = $data['recubrimiento'];
        $metodo = $data['metodo'];
        $posicion_inversor = $data['posicion_inversor'];
        $id = $data['id'];
        //Agregando a la base de datos
        $levantamiento =  new Levantamiento();
        $levantamiento->create([
            'fachada' => $fachada,
            'medidor' => $medidor,
            'azotea' => $azotea,
            'objeto_afecta' => $objeto_afecta,
            'perforacion' => $perforacion,
            'material' => $material,
            'espesor' => $espesor,
            'recubrimiento' => $recubrimiento,
            'metodo' => $metodo,
            'inversor' => $inversor,
            'posicion_inversor' => $posicion_inversor,
            'visita_id' => $id

        ]);
        return view('ambiente.create')->with('id',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Levantamiento  $levantamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Levantamiento $levantamiento)
    {
        //
        return view('levantamiento.show',compact('levantamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Levantamiento  $levantamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Levantamiento $levantamiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Levantamiento  $levantamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Levantamiento $levantamiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Levantamiento  $levantamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Levantamiento $levantamiento)
    {
        //
    }
}
