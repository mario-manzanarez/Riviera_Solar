<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levantamiento extends Model
{
    //Atributos que el usuario debe ingresar
    protected $fillable = [
        'fachada','medidor','azotea','objeto_afecta','perforacion','material',
        'espesor','recubrimiento','metodo','inversor','posicion_inversor',
        'visita_id'
    ];
}
