<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'Nombre', 'Cantidad', 'Precio_produccion', 'Precio_venta'
    ];

    public function ordenes(){
        $this->belongsToMany(Ordenes::class);
    }
}
