<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordenes;
use App\Detalle_Orden;
use DB;

class OrdenesController extends Controller
{
    public function Index(){
        $ordenes = Ordenes::all();
        return view('Detalle_Orden.create');
    }

    public function traerOrdenes(){ 
        $ordenes = Ordenes::all();
  
        return view('Detalle_Orden.create',compact('ordenes'));
    }

    public function crearOrden(Request $ordenProducto){
        $ordenDatos = [
            'Fecha_Orden' => date()->format('Y-m-d'),
            'Fecha_Envio' => $ordenProducto->Fecha_envio,
        ];
        Ordenes::create($ordenDatos->all());


        foreach ($ordenProducto as $auxiliar) {
            # code...}
            $input = [
                "Productos_id" => $auxiliar->Productos_id,
                "Ordenes_id" => $auxiliar->Ordenes_id,
                "Cantidad" => $auxiliar->Cantidad, 
                "Precio" => $auxiliar->Precio,
            ];
            Detalle_Orden::create($input);
        }
        
        return redirect()->route('view')
            ->with('Hecho','Se ha creado la orden exitosamente');
    }

    public function buscarOrden($id){
        $Detalle_orden = DB::table('Detalle_orden')->
            where('Ordenes_id', '=', $id);
    }
}
