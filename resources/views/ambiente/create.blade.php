@extends('layouts.app')

@section('content')
<h1 class="text-center">Registra datos sobre el ambiente eléctrico</h1>

<div class="row justify-content-center mt-5">
    <div class="col-md-8 bg-white shadow-lg">
        <form method="POST" action="{{route('ambiente.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
                <label for="canalizacion_DC">¿Cuál es el tipo de canalizacion DC?</label>
                <input type="text" name="canalizacion_DC" id="canalizacion_DC" class="form-control">
                @error('canalizacion_DC')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="trayectoria_dc">Fotografía que ilustre la trayectoria DC</label>
                <input type="file" name="trayectoria_dc" id="trayectoria_dc" class="form-control">
                @error('trayectoria_dc')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ubicacion_centro">Fotografía de ubicación de centro de carga y/ó Interruptor principal del
                    sitio <span class="text-danger">
                        (con un ángulo donde se pueda identificar su ubicación)
                    </span> </label>
                <input type="file" name="ubicacion_centro" id="ubicacion_centro" class="form-control">
                @error('ubicacion_centro')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="capacidad_interruptor">Capacidad del interruptor o fusibles principales del sitio</label>
                <input type="text" name="capacidad_interruptor" id="capacidad_interruptor" class="form-control">
            </div>
            <div class="form-group">
                <label for="interconexion">Fotografía de los voltajes del punto de interconexión <span
                        class="text-danger">(Identificar por línea L1, L2, L3...LN)</span></label>
                <input type="file" name="interconexion" id="interconexion" class="form-control">
            </div>
            <div class="form-group">
                <label for="tierra_fisica">¿El punto de interconxión cuenta con tierra fisica?
                    <span class="text-danger">
                        (En caso de no contar avisar al cliente que es necesaria para aterrizar su sistema)
                    </span>
                </label>
                <select name="tierra_fisica" id="tierra_fisica" class="form-control">
                    <option value="">-- Seleccionar --</option>
                    <option value="0">No</option>
                    <option value="1">Si</option>
                </select>
            </div>
            <div class="form-group">
                <label for="canalizacion_AC">¿Tipo de canalización AC?</label>
                <input type="text" name="canalizacion_AC" id="canalizacion_AC" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="trayectoria_AC">Fotografías que ilustren la trayectoria AC</label>
                <input type="file" name="trayectoria_AC" id="trayectoria_AC" class="form-control">
            </div>
            
            <div class="form-group mt-2">
                <input type="hidden" value="{{$id}}" name="id">
                <input type="submit" class="btn btn-success" value="Registrar">
            </div>
        </form>

    </div>

</div>
@endsection