<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ordenes;
use App\detalle__ordenes;
use App\productos;
use App\productos_materiales;
use DB;

class OrdenesController extends Controller
{

    public function traerOrdenes(){ 

        # Aqui provisiono a la pagina de ordenes con sus respectivos productos

        $ordenes = ordenes::orderBy('id', 'desc')->get();

        foreach ($ordenes as $key) {
            $key['Productos'] = DB::table('detalle__ordenes')
            ->join('productos', 'productos.id', '=', 'detalle__ordenes.Productos_id')
            ->join('ordenes', 'ordenes.id', '=', 'detalle__ordenes.Ordenes_id')
            ->where('Ordenes_id', '=', $key->id)
            ->select('productos.Nombre', 'productos.Cantidad')
            ->get();
        }
        return view('Detalle_Orden.index',compact('ordenes'));
    }

    public function traerOrdenesxfecha(Request $request){

        $ordenes = ordenes::whereRaw('FechaOrden between ? and ? ', 
            [$request->fecha1, $request->fecha2])->get();
        
        foreach ($ordenes as $key) {
            $key['Productos'] = DB::table('detalle__ordenes')
                ->join('productos', 'productos.id', '=', 'detalle__ordenes.Productos_id')
                ->join('ordenes', 'ordenes.id', '=', 'detalle__ordenes.Ordenes_id')
                ->where('Ordenes_id', '=', $key->id)
                ->select('productos.Nombre', 'productos.Cantidad')
                ->get();
        }

        return view('Detalle_Orden.index',compact('ordenes'));
    }

    public function nuevaOrden(){
        # Aqui proviciono a la vista con los datos de los productos para que los pueda elegir el usuario
        $productos = productos::all();
        return view('Detalle_Orden.create', compact('productos'))->with('i');

    }

    public function crearOrden(Request $ordenProducto){

        return $ordenProducto;

        # Input para crear un nuevo registro de ordenes
        $ordenDatos = [
            'FechaOrden' => date('Y-m-d'),
            'FechaEnvio' => $ordenProducto->FechaEnvio,
        ];
        # Se crea la orden con el input
        $orden = ordenes::create($ordenDatos);
        
        # Los id de productos que fueron seleccionados se guardan en un arreglo dentro de nuestra variable $ordenProducto
        # Asi que, lo que se hace aqui, es extraerlo para manipularlo de mejor manera

        $pedido = $ordenProducto->result;

        # Como este arreglo tiene consigo ID que necesito extraer para su lectura, voy a usar un foreach en mi arreglo
        # $pedido con el atributo 'as $id' para un mejor entendimiento de lo que estoy manejando

        foreach ($pedido as $id) {

            $aux = [
                'Ordenes_id' => $orden->id,
                'Productos_id' => $id,
            ];
            # La variable prueba no se usa para nada, solo para probar que las cosas si se estan creando correctamente
            # Sin embargo, la parte derecha, que es la creacion del registro en la tabla detalles de ordenes es importante
            $prueba[] = detalle__ordenes::create($aux);
        }

        # Lo siguiente bien se pudo hacer en el mismo foreach de arriba pero por razones de organizacion los separo
        # para dictar que este es otro proceso, el proceso de modificar el inventario, bajar la cantidad usada por la orden
        # en la tabla de Materiales

        foreach ($pedido as $id) {
            # $matused es una variable donde guardaremos el resultado de esta consulta, lo que pretendemos sacar
            # de aqui es el id del material + la cantidad de material que cada producto usa.
            # La consulta de abajo hace lo antes dicho
            $matused = DB::table('productos_materiales')->
                where('productos_materiales.Productos_id', $id)->
                    select('productos_materiales.Material_id','productos_materiales.Cantidad_Material')->
                        get();
            
            # Ahora $matused esta poblada de varios renglones de ids con enteros, asi que, lo que sigue es
            # descontarlo de la tabla Materiales, para reflejar que estos productos consumieron estos materiales
            # por ende, ya no estan en nuestro sistema ( una resta )
            
            foreach ($matused as $key2) {
                # $cantstock será una variable en donde nosotros guardaremos la cantidad actual en el inventario
                # el cual será objecto de la resta, obviamente este hara el proceso conforme a la ID dada por $matused
                # Asi que, en teoria, no deberiamos preocuparnos por descontar entre materiales diferentes
                
                $cantstock = DB::table('materiales')->
                    where('id', $key2->Material_id)->
                        select('materiales.CantidadStock')->get();

                # La siguiente condicional tratara de filtrar entre las diversas posibilidades de dar de alta una orden
                # las cuales son: 
                # A) No hay sufientes materiales, por ende, se cancela la orden o 
                # B) Si hay materiales suficientes y procede a descontarlos
                
                if ($key2->Cantidad_Material < $cantstock) {
                    # Aqui se crea la variable $nuevacant que alojara la diferencia entre la cantidad en stock y la cantidad usada por
                    # la orden, despues, se hará un uptdate a la tabla materiales, el cual ahora obtendra la
                    # cantidad actualizada despues de la resta
                    $nuevacant = $cantstock - $key2->Cantidad_Material;
                    DB::table('materiales')->
                        where('id', $key2->Material_id)->
                            update(['CantidadStock' => $nuevacant]);
                }
                else {
                    # El error se devuelve con un with
                    $orden->delete();
                    $prueba->delete();
                    return redirect()->route('Ordenes')->with('success', 'No se tiene en stock la cantidad solicitada');
                }
            }
        }
        
        return redirect()->route('Ordenes')->with('success', 'Orden creada correctamente');
    }

    public function buscarOrden($id){
        $Detalle_orden = DB::table('Detalle_orden')->
            where('Ordenes_id', '=', $id);
    }
}
