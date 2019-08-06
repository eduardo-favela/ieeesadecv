<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='Productos';
    protected $primaryKey='id_producto';
    public $timestamps=false;

    function marcas(){
        return $this->hasOne(Marca::class,'id_marca','id_producto');
    }
}
