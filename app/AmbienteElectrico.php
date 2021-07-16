<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmbienteElectrico extends Model
{
    ////Atributos que el usuario debe ingresar
    protected $fillable = [
        'canalizacion_DC', 'trayectoria_dc', 'ubicacion_centro', 'capacidad_interruptor',
        'interconexion', 'tierra_fisica', 'canalizacion_AC', 'trayectoria_AC',
        'visita_id'
    ];
}
