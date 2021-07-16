<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    //Redireccion panel
    public function panel(){
        return view('panel.dashboard');
    }
}
