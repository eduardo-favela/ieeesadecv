<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Process\Process;
class ControllerProductos extends Controller
{
    function productosfiltrados(Request $request){
        $tipoproducto=$request->get('tipo');
        $productos=Producto::all()->where('tipo_producto','=',$tipoproducto);

        return($productos);
    }
}
