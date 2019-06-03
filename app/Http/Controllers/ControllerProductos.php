<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProductos extends Controller
{
    function verinicio(){
        return view('Inicio');
    }
    function actualizar(){
        shell_exec();
    }
}
