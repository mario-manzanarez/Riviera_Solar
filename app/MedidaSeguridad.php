<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedidaSeguridad extends Model
{
    //
    //Datos a ingresar para la visita
    protected $fillable = [
        'escalera', 'argolla', 'vulnerables', 'visitas_id'
    ];
    //funcion para traer el nombre del usuario con una relacion de uno a uno
    public function visita()
    {
        return $this->hasMany(Visita::class,'id');
    }
}
