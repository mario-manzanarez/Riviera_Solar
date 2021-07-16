@extends('layouts.app')

@section('content')
<h1 class="text-center">Registra el levantamiento técnico</h1>

<div class="row justify-content-center mt-5">
    <div class="col-md-8 bg-white shadow-lg">
        <form method="POST" action="{{route('levantamiento.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
                <label for="fachada">Foto de la fachada del sitio (casa, establecimiento, industria, etc.)</label>
                <input type="file" name="fachada" id="fachada" class="form-control">
                @error('fechada')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="medidor">Fotografía de medidor <span class="text-danger">(Donde se aprecie su número de
                        serie y como se encuentra empotrado de frente y de lado)</span> </label>
                <input type="file" name="medidor" id="medidor" class="form-control">
                @error('medidor')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="azotea">Fotografía panorámica de azotea de la casa</label>
                <input type="file" name="azotea" id="azotea" class="form-control">
                @error('vulnerable')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="objeto_afecta">Fotografías en caso de que exista algún objeto y/ó construcciones que afecten
                    el diseño de la estructura y acomodo de los paneles</label>
                <input type="file" name="objeto_afecta" id="obejto_afecta" class="form-control">
            </div>
            <div class="form-group">
                <label for="perforacion">Fotografías de pruebas de perforación de losa <span
                        class="text-danger">(considerar diferentes pruebas en el espacio de instalación)</span></label>
                <input type="file" name="perforacion" id="perforacion" class="form-control">
            </div>
            <div class="form-group">
                <label for="material">Material con el que esta construida la loza</label>
                <input type="text" name="material" id="material" class="form-control">
            </div>
            <div class="form-group">
                <label for="espesor">Espesor de la loza</label>
                <input type="text" name="espesor" id="espesor" class="form-control">
            </div>
            <div class="form-group">
                <label for="recubrimiento">Recubrimiento de la loza</label>
                <input type="text" name="recubrimiento" id="recubrimiento" class="form-control">
            </div>
            <div class="form-group">
                <label for="metodo">¿Cuál es el método de anclaje que se propone utilizar?</label>
                <input type="text" name="metodo" id="metodo" class="form-control">
            </div>
            <div class="form-group">
                <label for="inversor">Fotografía que ilustre ubicación de inversor</label>
                <input type="file" name="inversor" id="inversor" class="form-control">
            </div>
            <div class="form-group">
                <label for="posicion_inversor">¿El sitio donde se coloca el inversor tiene fácil acceso?
                    <span class="text-danger"> (sin utilizar escaleras y demás accesorios para llegar a él, considerar
                        que el inversor debe tener al menos 30 cm libres de cada lado y debe estar al menos 90 cm
                        elevado del piso)</span>
                </label>
                <select name="posicion_inversor" id="posicion_inversor" class="form-control">
                    <option value="">-- Selecionar --</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <input type="hidden" value="{{$id}}" name="id">
                <input type="submit" class="btn btn-success" value="Registrar">
            </div>
        </form>

    </div>

</div>
@endsection