<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordenes;
use App\Detalle_Ordenes;
use App\Productos;
use DB;

class OrdenesController extends Controller
{
    public function traerOrdenes(){ 

        $ordenes = Ordenes::all();

        foreach ($ordenes as $key) {
            $key['Productos'] = DB::table('detalle__ordenes')
            ->join('productos', 'productos.id', '=', 'detalle__ordenes.Productos_id')
            ->join('ordenes', 'ordenes.id', '=', 'detalle__ordenes.Ordenes_id')
            ->where('Ordenes_id', '=', $key->id)
            ->select('productos.Nombre')
            ->get();
        }
        //return view('Detalle_Orden.index', compact('array'));
        return view('Detalle_Orden.index',compact('ordenes'));
    }

    public function nuevaOrden(){
        $productos = Productos::all();
        return view('Detalle_Orden.create', compact('productos'))->with('i');
    }

    public function crearOrden(Request $ordenProducto){
        $ordenDatos = [
            'FechaOrden' => date('Y-m-d'),
            'FechaEnvio' => $ordenProducto->FechaEnvio,
        ];
        //$orden = Ordenes::create($ordenDatos->all());
        $productos = Productos::all();

        return $ordenProducto;

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
