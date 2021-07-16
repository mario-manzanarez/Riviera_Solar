<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\UserProvider;
use app\User;
class UsuariosController extends Controller


{
    //Controlador para crear un usuario
    public function crearUsuario(){
        return view('usuarios.crear');
    }

    //Controlador para listar los usuarios
    public function listar(){
        $listado  = User::all();

        return view('usuarios.listar',$listado);
    }


}
