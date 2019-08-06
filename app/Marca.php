<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table='Marcas';
    protected $primaryKey='id_marca';
    public $timestamps=false;

function marcaproductos(){
return $this->belongsTo(Producto::class,'id_producto','id_marca');
}
}
