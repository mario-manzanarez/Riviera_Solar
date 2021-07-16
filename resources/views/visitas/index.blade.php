@extends('layouts.app')

@section('content')
<h1 class="text-center mb5">Listado de las visitas</h1>
<div class="col-md-10 mx-auto bg-white p-3 shadow-lg">
    
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col"> Número de visita</th>
                <th scole="col">Lugar</th>
                <th scole="col">Fecha</th>
                <th scole="col">Hora</th>
                <th scole="col">Testigo</th>
                <th scole="col">Ingeniero encargado</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitas as $row)
            <tr>
                <th scole="col" class="border">{{$row->id}}</th>
                <th scole="col" class="border">{{$row->lugar}}</th>
                <th scole="col" class="border">{{$row->fecha}}</th>
                <th scole="col" class="border">{{$row->hora}}</th>
                <th scole="col" class="border">{{$row->testigo}}</th>
                <th scole="col" class="border">{{$row->usuario->nombre}}</th>
                <th scole="col" class="border">
                    <a href="" class="btn btn-danger mr-1">Borrar</a>
                    <a href="{{action('VisitaController@show',['visita'=>$row->id])}}" class="btn btn-success mr-1">Ver</a>
                </th>
            </tr>

            @endforeach
        </tbody>

    </table>

</div>
@endsection