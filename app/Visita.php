<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    //Datos a ingresar para la visita
    protected $fillable = [
        'lugar', 'testigo','descripcion', 'fecha', 'hora'
    ];
    //funcion para traer el nombre del usuario con una relacion de uno a uno
    public function usuario(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function medida()
    {
        return $this->hasOne(MedidaSeguridad::class);
    }
}
