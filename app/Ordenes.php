<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    protected $fillable = [
        'FechaOrden','FechaEnvio'
    ];

    public function productos(){
        $this->belongsToMany(Productos::class);
    }
}
