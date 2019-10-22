<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table= 'Producto';
 
 protected $fillable=[
 
 'codigo',
 'nombre',
 'proveedor_id',
 'ubicacion',
 'costo', 
 'precio_venta',
]
}
