<?php

namespace App\Http\Controllers;

use App\User;
use App\Visita;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VisitaController extends Controller
{

    //constructor de la clase con middleware
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visita = Visita::all();
        //Metodo que muestra todas las visitas
        return view('visitas.index')->with('visitas',$visita);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Código para subir una imagen al sevidor:
            $request['imagen]->store('upload-recetas',public);
        */
        $data = request();
        timezone_open('America/Mexico_City');
        //  DB::table('visitas')->insert([
        //      'lugar' => $data['lugar'],
        //      'testigo' => $data['testigo'],
        //      'fecha' => date('yy-m-d'),
        //      'hora' => now(),
        //      'usuario_id' => Auth::user()->id
             
        //  ]);
        //Creando el modelo
        $visita = new Visita();
        //Almacenando con modelo
        $visita = auth()->user()->visitas()->create([
            'lugar' => $data['lugar'],
            'descripcion' => $data['descripcion'],
            'testigo' => $data['testigo'],
            'fecha' => date('yy-m-d'),
            'hora' => now(),
        ]);
        $id = $visita->id;
         return view('medidas.create')->with('id',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function show(Visita $visita)
    {
        // //Metodo para mostrar las visitas tecnicas
         return view('visitas.show',compact('visita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function edit(Visita $visita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visita $visita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visita $visita)
    {
        //
    }
}
