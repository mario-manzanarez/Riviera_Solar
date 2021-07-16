<?php

namespace App\Http\Controllers;

use App\AmbienteElectrico;
use Illuminate\Http\Request;

class AmbienteElectricoController extends Controller
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
        return view('ambiente.create');
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
        //Moviendo Archivos
        $trayectoria_dc = $data['trayectoria_dc']->store('upload-ambiente','public');
        $ubicacion_centro = $data['ubicacion_centro']->store('upload-ambiente','public');
        $interconexion = $data['interconexion']->store('upload-ambiente','public');
        $trayectoria_AC = $data['trayectoria_AC']->store('upload-ambiente','public');
        //Datos que no contienen archivos
        $canalizacionDC = $data['canalizacion_DC'] ;
        $capacidad_interruptor = $data['capacidad_interruptor'];
        $tierra_fisica = $data['tierra_fisica'];
        $canlizacion_AC =$data['canalizacion_AC'];
        $id = $data['id'];
        //Enviando a la base de datos
        $ambiente = new AmbienteElectrico();
        $ambiente->create([
            'canalizacion_DC' => $canalizacionDC,
            'trayectoria_dc' => $trayectoria_dc,
            'ubicacion_centro' => $ubicacion_centro,
            'capacidad_interruptor' => $capacidad_interruptor,
            'interconexion' => $interconexion,
            'tierra_fisica' => $tierra_fisica,
            'canalizacion_AC' => $canlizacion_AC,
            'trayectoria_AC' => $trayectoria_AC,
            'visita_id' => $id
        ]);
        
        return view('detalles.create')->with('id',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AmbienteElectrico  $ambienteElectrico
     * @return \Illuminate\Http\Response
     */
    public function show(AmbienteElectrico $ambienteElectrico)
    {
        //
        return view('ambiente.show',compact('ambienteElectrico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AmbienteElectrico  $ambienteElectrico
     * @return \Illuminate\Http\Response
     */
    public function edit(AmbienteElectrico $ambienteElectrico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AmbienteElectrico  $ambienteElectrico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AmbienteElectrico $ambienteElectrico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AmbienteElectrico  $ambienteElectrico
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmbienteElectrico $ambienteElectrico)
    {
        //
    }
}
