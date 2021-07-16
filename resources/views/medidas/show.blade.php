@extends('layouts.app')

@section('content')

<div class="col-md-8 contenedor_menu">
    <ul>
        <li><a href="{{action('VisitaController@show',['visita'=> $medidaSeguridad->visitas_id])}}">General</a></li>
        <li><a href="{{action('LevantamientoController@show',['levantamiento'=> $medidaSeguridad->visitas_id])}}">Levantamiento técnico</a></li>
        <li><a href="{{action('AmbienteElectricoController@show',['ambienteElectrico'=> $medidaSeguridad->visitas_id])}}">Ambiente eléctrico</a></li>
        <li><a href="{{action('DetallesController@show',['detalles'=> $medidaSeguridad->visitas_id])}}">Detalles finales</a></li>
    </ul>
</div>
<div class="row justify-content-center mt-5">

    <div class="col-md-8 bg-white shadow-lg">
        
            <h1 class="mt-3">Medidas de seguridad de la visita n° {{$medidaSeguridad->visitas_id}}</h1>
            <h2 class="title mt-2">Escalera</h2>
            <img class="img_show" src="/storage/{{$medidaSeguridad->escalera}}" alt="Escalera adecuadamente puesta"
                width="100%">
            <h2 class="title mt-2">Argolla</h2>
            <img src="/storage/{{$medidaSeguridad->argolla}}" alt="Argolla" width="100%" align="center">
            @if ($medidaSeguridad->vulnerables)
            <h2 class="title mt-2">Objetos vulnerables</h2>
            <img src="/storage/{{$medidaSeguridad->vulnerables}}" alt="Vulnerable" width="100%" class="mb-3">

            @endif
      

    </div>
    <div class="row">

        @endsection