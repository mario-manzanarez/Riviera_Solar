@extends('layouts.app')

@section('content')

<div class="col-md-8 contenedor_menu">
    <ul>
        <li><a href="{{action('VisitaController@show',['visita'=>$detalles->visita_id])}}">General</a></li>
        <li><a href="{{action('MedidaSeguridadController@show',['medidaSeguridad'=>$detalles->id])}}">Medidas de
                seguridad</a></li>
        <li><a href="{{action('LevantamientoController@show',['levantamiento'=> $detalles->id])}}">Levantamiento
                técnico</a></li>
        <li><a href="{{action('AmbienteElectricoController@show',['ambienteElectrico'=> $detalles->id])}}">Ambiente
                eléctrico</a></li>
    </ul>
</div>
<div class="row justify-content-center mt-5">

    <div class="col-md-8 bg-white shadow-lg">

        <h1 class="mt-3">Visita n° {{$detalles->visitas_id}}</h1>
        <h2 class="title mt-2">Puertos y etiqueta del módem</h2>
        <img src="/storage/{{$detalles->puertos}}" alt="Puertos y etiqueta del modem" width="100%" height="400">
        <h2 class="title mt-2">Trayectoria de datos a seguir</h2>
        <img src="/storage/{{$detalles->datos}}" alt="datos" width="100%" align="center" height="400">
        <h2 class="title mt-2">Son necesarios trabajos de terceros: 

        @if ($detalles->terceros === 0)
        <span class="text-primary">Si</span>
        @else
        <span class="text-primary">No</span>
        @endif
    </h2>

    </div>
    <div class="row">

        @endsection