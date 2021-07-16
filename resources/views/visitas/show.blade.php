@extends('layouts.app')

@section('content')
<div class="col-md-8 contenedor_menu">
    <ul>
        <li><a href="{{action('MedidaSeguridadController@show',['medidaSeguridad'=>$visita->id])}}">Medidas de seguridad</a></li>
        <li><a href="{{action('LevantamientoController@show',['levantamiento'=>$visita->id])}}">Levantamiento técnico</a></li>
        <li><a href="{{action('AmbienteElectricoController@show',['ambienteElectrico'=>$visita->id])}}">Ambiente eléctrico</a></li>
        <li><a href="{{action('DetallesController@show',['detalles'=>$visita->id])}}">Detalles finales</a></li>
    </ul>
</div>


<div class="row justify-content-center mt-5">

    <div class="col-md-8 bg-white shadow-lg">
        <div class="col-md-8 bg-white ">
            <h1 class="mt-2">No Visita {{$visita->id}}</h1>
            <hr class="mt-1 mb-2 ">
            <h2 class="title">En: <span class="text-primary">{{$visita->lugar}}</span></h2>
            <h2 class="title">Realizada por: <span class="text-primary">{{$visita->usuario->nombre}}</span></h2>
            <span>{{$visita->created_at}}</span>
            <h3 class="mt-5 title">Descripción</h3>
            <p class="texto">
                {{$visita->Descripcion}}
            </p>
            <h4 class="mb-3 title">Persona presente durante la visita: <span
                    class="text-primary">{{$visita->testigo}}</span></h4>

        </div>

    </div>
    <div class="row">

        @endsection