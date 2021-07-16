@extends('layouts.app')

@section('content')
<div class="col-md-8 contenedor_menu">
    <ul>
        <li><a href="{{action('VisitaController@show',['visita'=>$levantamiento->visita_id])}}">General</a></li>
        <li><a href="{{action('MedidaSeguridadController@show',['medidaSeguridad'=>$levantamiento->id])}}">Medidas de
                seguridad</a></li>
        <li><a href="{{action('AmbienteElectricoController@show',['ambienteElectrico'=>$levantamiento->id])}}">Ambiente
                eléctrico</a></li>
        <li><a href="{{action('DetallesController@show',['detalles'=>$levantamiento->id])}}">Detalles finales</a></li>
    </ul>
</div>


<div class="row justify-content-center mt-5">

    <div class="col-md-8 bg-white shadow-lg">
        <div class="col-md-8 bg-white ">
            <h1 class="mt-2">No Visita {{$levantamiento->visita_id}}</h1>
            <hr class="mt-1 mb-2 ">


        </div>
        <h2 class="title">Fachada del sitio</h2>
        <img src="/storage/{{$levantamiento->fachada}}" alt="fachada" width="100%">
        <h2 class="mt-5 title">Medidor</h2>
        <img src="/storage/{{$levantamiento->medidor}}" alt="medidor" width="100%">
        <h2 class="mt-5 title">Fotografía panorámica de azotea de la casa</h2>
        <img src="/storage/{{$levantamiento->azotea}}" alt="azotea" width="100%">
        <h2 class="mt-5 title">Fotografías en caso de que exista algún objeto y/ó construcciones que afecten el diseño
            de la estructura y acomodo de los paneles</h2>
        <img src="/storage/{{$levantamiento->objeto_afecta}}" alt="objeto_afecta" width="100%">
        <h2 class="mt-5 title">Perforación en la loza</h2>
        <img src="/storage/{{$levantamiento->perforacion}}" alt="perforacion" width="100%">
        <h2 class="mt-5 title">Material con el que esta construida la loza: <span class="text-primary">{{$levantamiento->material}}</span>
        </h2>
        <h2 class="mt-5 title">Espesor de la loza: <span class="text-primary">{{$levantamiento->espesor}}</span>
        </h2>
        <h2 class="mt-5 title">Recubrimiento de la loza: <span class="text-primary">{{$levantamiento->recubrimiento}}</span>
        </h2>
        <h2 class="mt-5 title">Metodo a utilizar: <span class="text-primary">{{$levantamiento->metodo}}</span>
        </h2>
        <h2 class="mt-5 title">Ubicación del inversor</h2>
        <img src="/storage/{{$levantamiento->inversor}}" alt="inversor" width="100%">
        <h2 class="mt-5 mb-3 title">¿El sitio donde se coloca el inversor tiene fácil acceso? <span class="text-primary">
            @if($levantamiento->posicion_inversor === 0)
                {{"No"}}
            @else
                {{"Si"}}
            @endif
        </span></h2>

    </div>
    <div class="row">

        @endsection