<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordenes;
use App\Detalle_Orden;
use App\Productos;
use DB;

class OrdenesController extends Controller
{
    /*public function Index(){
        $ordenes = Ordenes::all();
        return view('Detalle_Orden.create');
    }*/

    public function traerOrdenes(){ 
        $ordenes = Ordenes::all();
        $productos = Productos::all();
  
        return view('Detalle_Orden.create',compact('ordenes', 'productos'));
    }

    public function crearOrden(Request $ordenProducto){
        $ordenDatos = [
            'FechaOrden' => date('Y-m-d'),
            'FechaEnvio' => $ordenProducto->FechaEnvio,
        ];
        //$orden = Ordenes::create($ordenDatos->all());
        $productos = Productos::all();

        /*
        foreach ($productos as $auxiliar) {
            if () {
                $input = [
                    "Productos_id" => $auxiliar->Productos_id,
                    "Ordenes_id" => $auxiliar->Ordenes_id,
                    "Cantidad" => $auxiliar->Cantidad, 
                    "Precio" => $auxiliar->Precio,
                ];
                Detalle_Orden::create($input);
            }
        }
        return redirect()->route('view')
            ->with('Hecho','Se ha creado la orden exitosamente');*/
    }

    public function buscarOrden($id){
        $Detalle_orden = DB::table('Detalle_orden')->
            where('Ordenes_id', '=', $id);
    }
}
