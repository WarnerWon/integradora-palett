<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos_materiales extends Model
{
    protected $fillable = [
        'Productos_id', 'Material_id', 'Cantidad_Material',
    ];
}
