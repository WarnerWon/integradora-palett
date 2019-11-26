<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    protected $fillable = [
        'Fecha_Orden','Fecha_Envio'
    ];
}
