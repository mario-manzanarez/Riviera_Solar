@extends('layouts.app')

@section('content')
<h2 class="text-center mb-5 ">Registro los detalles finales</h2>
<div class="row justify-content-center mt-5 ">
    <div class="col-md-8 bg-white">
        <form method="POST" action="{{route('detalle.store')}}" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="form-group mt-2">
                <label for="puertos">Fotografía de los puertos y etiqueta del módem</label>
                <input type="file" name="puertos" id="puertos" class="form-control">
                
            </div>
            <div class="form-group mt-2">
                <label for="datos">Fotografías que ilustre la trayectoria de datos a seguir</label>
                <input type="file" multiple name="datos" id="datos" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="terceros">¿Se necesitan trabajos de terceros?
                    <span class="text-danger">
                        (En caso de ser ser necesarios avisar que tiene un costo adicional)
                    </span>
                </label>
                <select name="terceros" id="terceros" class="form-control">
                    <option value="">-- Seleccionar --</option>
                    <option value="0">No</option>
                    <option value="1">Si</option>
                </select>
            </div>
            

            <div class="form-group">
                <input type="hidden" value="{{$id}}" name="id">
                <input type="submit" class="btn btn-success" value="Registrar">
            </div>
        </form>

    </div>
</div>


@endsection