<?php

namespace App\Http\Controllers;

use App\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
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
        return view('detalles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request;
        //Archivos de fotografias que se guardan en el storage
        $puertos = $data['puertos']->store('upload-detalles','public');
        $datos = $data['datos']->store('upload-detalles','public');

        $terceros = $data['terceros'];
        $id = $data['id'];

        $detalle = new Detalles();
        $detalle->create([
            'puertos' => $puertos,
            'datos' => $datos,
            'terceros' => $terceros,
            'visita_id' => $id
        ]);

        redirect('VisitaController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function show(Detalles $detalles)
    {
        //Metodo que muestra le contenido de la tabla de detalles
        return view('detalles.show',compact('detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalles $detalles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalles $detalles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalles $detalles)
    {
        //
    }
}
