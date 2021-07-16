<?php

namespace App\Http\Controllers;

use App\MedidaSeguridad;
use Illuminate\Http\Request;

class MedidaSeguridadController extends Controller
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
        
        return view('medidas.create');
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
        $id = (int)$data['id'];
        
        $data = request()->validate([
              'escalera' => 'required',
              'argolla' => 'required',
              'vulnerable' => 'nullable'
          ]);
        $escalera = $data['escalera']->store('upload-medidas','public');
        $argolla = $data['argolla']->store('upload-medidas','public');
        $vulnerable = $data['vulnerable']->store('upload-medidas','public');
        
        $medidaSeguridad = new MedidaSeguridad();
        $medidaSeguridad->create([
            'escalera' => $escalera,
            'argolla' => $argolla,
            'vulnerables' => $vulnerable,
            'visitas_id' => $id
        ]);

        return view('levantamiento.create')->with('id',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedidaSeguridad  $medidaSeguridad
     * @return \Illuminate\Http\Response
     */
    public function show(MedidaSeguridad $medidaSeguridad)
    {
        //
        return view('medidas.show',compact('medidaSeguridad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedidaSeguridad  $medidaSeguridad
     * @return \Illuminate\Http\Response
     */
    public function edit(MedidaSeguridad $medidaSeguridad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedidaSeguridad  $medidaSeguridad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedidaSeguridad $medidaSeguridad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedidaSeguridad  $medidaSeguridad
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedidaSeguridad $medidaSeguridad)
    {
        //
    }
}
