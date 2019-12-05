<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materiales extends Model
{
    protected $fillable = [
        'Nombre', 'Categoria_id', 'Unidades_medida_Id', 'CantidadStock',
    ];

}