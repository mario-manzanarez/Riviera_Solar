<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    //Datos que debe de ingresar el usuario
    protected $fillable = [
        'puertos','datos','terceros','visita_id'
    ];
}
