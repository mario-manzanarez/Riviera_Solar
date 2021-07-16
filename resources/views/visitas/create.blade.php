@extends('layouts.app')

@section('content')
<h2 class="text-center mb-5 ">Registro de visita técnica</h2>
<div class="row justify-content-center mt-5 ">
    <div class="col-md-8 bg-white">
        <form method="POST" action="{{route('visita.store')}}" novalidate>
            @csrf
            <div class="form-group mt-2">
                <label for="lugar">Lugar</label>
                <input type="lugar" name="lugar" class="form-control">
                
            </div>
            <div class="form-group mt-2">
                <label for="descripcion">Describa el motivo de la visita</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
            </div>
            
            <div class="form-group">
                <label for="testigo">Persona que estuvo presente</label>
                <input type="text" name="testigo" class="form-control">
            </div>
            

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Registrar">
            </div>
        </form>

    </div>
</div>


@endsection