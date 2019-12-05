<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = [
        'Nombre', 'Cantidad', 'Precio_produccion',
    ];

    public function ordenes(){
        $this->belongsToMany(Ordenes::class);
    }
}
