<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ordenes;
use App\Productos;
use App\materiales;
use App\productos_materiales;
use DB;

class GetController extends Controller
{
    public function productosIndex(){
        $Lista = Productos::all();

        foreach ($Lista as $key) {

            $key['Materiales'] = DB::table('materiales')
                ->join('productos_materiales', 'materiales.id', '=', 'productos_materiales.Material_id')
                    ->join('productos', 'productos.id', '=', 'productos_materiales.Productos_id')
                        ->join('categorias', 'categorias.id', '=', 'materiales.Categoria_id') 
                            ->join('unidades_medidas', 'unidades_medidas.id', '=', 'materiales.Unidades_medida_Id')
                                ->where('productos_materiales.Productos_id', $key->id)
                                    ->select('materiales.Nombre AS NombreMat', 'categorias.Nombre AS NombreCat', 'unidades_medidas.Nombre AS NombreUM', 'productos_materiales.Cantidad_Material')
                                        ->get();

        }
        return response()->json(['success' => true, 'data' => $Lista, 
            'message' => 'productos descargados correctamente'], 200);
    }

    public function ordenesIndex(){
        
        $Lista = ordenes::orderBy('id', 'desc')->get();

        foreach ($Lista as $key) {
            $key['Productos'] = DB::table('detalle__ordenes')
                ->join('productos', 'productos.id', '=', 'detalle__ordenes.Productos_id')
                    ->join('ordenes', 'ordenes.id', '=', 'detalle__ordenes.Ordenes_id')
                        ->where('Ordenes_id', '=', $key->id)
                            ->select('productos.Nombre', 'productos.Cantidad')
                                ->get();
        }

        return response()->json(['success' => true, 'data' => $Lista, 
            'message' => 'Ordenes descargadas correctamente'], 200);
    }

    public function materialesIndex(){

        $Lista = materiales::all();

        foreach ($Lista as $key) {

            $key['Nombre_Categoria'] = DB::table('categorias')
                ->where('categorias.id', $key->Categoria_id)
                    ->select('categorias.Nombre')
                        ->first();

            $key['Nombre_UM'] = DB::table('unidades_medidas')
                ->where('unidades_medidas.id', $key->Unidades_medida_Id)
                    ->select('unidades_medidas.Nombre')
                        ->first();
        }
        
        
        return response()->json(['success' => true, 'data' => $Lista, 
            'message' => 'Materiales descargados correctamente'], 200);
    }

    public function notification(){
        $ordendata = ordenes::orderBy('id', 'desc')->limit(3)->get();
        #$productodata = productos::orderby('id','desc')->limit(3);
        $materialdata = materiales::where('CantidadStock', '<', 50)->orderby('CantidadStock', 'desc')->limit(3)->get();
        foreach ($materialdata as $key) {
            $key['Medida'] = DB::table('unidades_medidas')->
                where('id', $key->Unidades_medida_Id)->
                select('Nombre')->first();
            $key['Tipo'] = DB::table('categorias')->
                where('id', $key->Categoria_id)->
                select('Nombre')->first();
        }
        return response()->json(['success' => true, 'data1' => $ordendata, 'data2' => $materialdata, 
            "message" => 'Productos y ordenes filtradas correctamente para su notificación'], 200);
    }
}
