<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle__ordenes extends Model
{
    protected $fillable = [
      'Ordenes_id', 'Productos_id'
    ];
}
