<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordenes extends Model
{
    protected $fillable = [
        'FechaOrden','FechaEnvio'
    ];

    public function productos(){
        $this->belongsToMany(Productos::class);
    }
}
