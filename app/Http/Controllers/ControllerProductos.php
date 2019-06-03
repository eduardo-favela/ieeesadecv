<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ControllerProductos extends Controller
{
    function verinicio(){
        return view('Inicio');
    }
    function actualizar(){
        $process = new Process(URL("actualizador.sh"));
        $process->run();
    }
}
