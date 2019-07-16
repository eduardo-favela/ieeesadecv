<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerroutes extends Controller
{
    function verinicio(){
        return view('Inicio');
    }

    function verproductos(){
        return view('productos');
    }
}
