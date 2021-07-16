@extends('layouts.app')

@section('content')
<div class="col-md-8 contenedor_menu">
    <ul>
        <li><a href="{{action('VisitaController@show',['visita'=>$ambienteElectrico->visita_id])}}">General</a></li>
        <li><a href="{{action('MedidaSeguridadController@show',['medidaSeguridad'=>$ambienteElectrico->id])}}">Medidas de
                seguridad</a></li>
        <li><a href="{{action('LevantamientoController@show',['levantamiento'=>$ambienteElectrico->id])}}">Levantamiento</a></li>
        <li><a href="{{action('DetallesController@show',['detalles'=>$ambienteElectrico->id])}}">Detalles finales</a></li>
    </ul>
</div>


<div class="row justify-content-center mt-5">

    <div class="col-md-8 bg-white shadow-lg">
        <div class="col-md-8 bg-white ">
            <h1 class="mt-2">No Visita {{$ambienteElectrico->visita_id}}</h1>
            <hr class="mt-1 mb-2 ">


        </div>
        <h2 class="title">Tipo de canalización DC: <span class="text-primary">{{$ambienteElectrico->canalizacion_DC}}</span></h2>
        <h2 class="title">Trayectoria DC</h2>
        <img src="/storage/{{$ambienteElectrico->trayectoria_dc}}" alt="trayectoria_dc" width="100%" height="400px">
        <h2 class="mt-5 title">Centro de carga y/ó interruptor</h2>
        <img src="/storage/{{$ambienteElectrico->ubicacion_centro}}" alt="ubicacion_centro" width="100%" height="400px">

        <h2 class="title mt-5">Capacidad del interruptor o fusibles <span class="text-primary">{{$ambienteElectrico->capacidad_interruptor}}</span></h2>

        <h2 class="mt-5 title">Voltajes del punto de interconexión</h2>
        <img src="/storage/{{$ambienteElectrico->interconexion}}" alt="interconexion" width="100%" height="400px">
        <h2 class="mt-5 mb-3 title">¿Cuenta con tierra física? <span class="text-primary">
            @if($ambienteElectrico->tierra_fisica === 0)
                {{"No"}}
            @else
                {{"Si"}}
            @endif
        </span></h2>
        <h2 class="mt-5 title">Tipo de canalización AC: <span class="text-primary">{{$ambienteElectrico->canalizacion_AC}}</span>
        </h2>
        <h2 class="mt-5 title">Trayectoria AC</h2>
        <img src="/storage/{{$ambienteElectrico->trayectoria_AC}}" alt="trayectoria_dc" width="100%" height="400px" class="mb-3">
        

    </div>
    <div class="row">

        @endsection