@extends('layouts.app')

@section( 'content')
<h1 class="text-center">Agregue las medidas de seguridad requeridas</h1>

<div class="row justify-content-center mt-5">
    <div class="col-md-8 bg-white shadow-lg">
        <form method="POST" action="{{route('medida.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
                <label for="escalera">Foto de que la escalera no se encuentra expuesta a desniveles, humedad, cables de Media Tensión y Baja Tensión</label>
                <input type="file"  name="escalera" id="escalera" class="form-control">
                @error('escalera')
                    <div class="alert alert-danger mt-1">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="argolla">Fotografía de argolla de seguridad y escalera fijada</label>
                <input type="file"  name="argolla" id="argolla" class="form-control">
                @error('argolla')
                    <div class="alert alert-danger mt-1">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="vulnerables">
                <label for="vulnerable">¿Existen objetos en planta baja que puedan sufrir algún daño al realizar la instalación? <span class="text-danger">(En caso de haber tomar fotografía del objeto y avisar al cliente que se tiene que mover o puede correr riesgo de daño)</span></label>
                <input type="file"  name="vulnerable" id="vulnerable" class="form-control">
                @error('vulnerable')
                    <div class="alert alert-danger mt-1">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <input type="hidden" value="{{$id}}" name="id">
                <input type="submit" class="btn btn-success" value="Registrar">
            </div>
        </form>

    </div>
    
</div>
@endsection
