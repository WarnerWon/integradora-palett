<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Orden extends Model
{
    protected $fillable = [
      'Productos_id', 'Ordenes_id', 'Cantidad', 'Precio',  
    ];
}
