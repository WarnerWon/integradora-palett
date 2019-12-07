<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Productos;
use App\materiales;
use App\productos_materiales;

class ProductosController extends Controller
{
    public function index(){
        $producto = Productos::all();
        return view('productos.productos',compact('producto'));
    }

    public function Destroy($id){

        $producto=Productos::find($id);
        $producto->delete();

        return redirect('productos');


    }

    public function Edit($id){

        $producto = Productos::find($id);
        
        return view('productos.Editarproductos',compact('producto'));

    }

    public function update(Request $request){

        $request->validate([
            'id' => 'required',
            'Nombre' => 'required',
            'Cantidad' => 'required',
            'Precio_produccion' => 'required',
        ]);

        $producto = Productos::find($request->id);

        $producto->update($request->all());

        return redirect()->route('productos')->with('success','Actualizado');
    }
    
    public function CreateProducto(){

        $Base = materiales::where('Categoria_id', 4)->get();
        $Saborizantes = materiales::where('Categoria_id', 1)->get();
        $Desechables = materiales::where('Categoria_id', 2)->get();
        $Complementos = materiales::where('Categoria_id', 3)->get();
        return view('productos.Nuevoproducto',compact('Base','Saborizantes','Desechables','Complementos'));

    }

    public function store(Request $request){

        $request->validate([
            'Nombre' => 'required',
            'CantidadUnique' => 'required',
            'Precio_produccion' => 'required',
            'contenido' => 'required',
            'Cantidad' => 'required',
        ]);

        $prod = [
            'Nombre' => $request->Nombre,
            'Cantidad' => $request->CantidadUnique,
            'Precio_produccion' => $request->Precio_produccion,
        ];

        $prodfinal = Productos::create($prod);

        $materiales = $request->contenido;
        $cantidades = $request->Cantidad;
        $i = 0;
        foreach ($materiales as $idmat) {
            if ($cantidades[$i] != null) {
                $aux = [
                    'Productos_id' => $prodfinal->id,
                    'Material_id' => $idmat,
                    'Cantidad_Material' => $cantidades[$i],
                ];
                ++$i;
                productos_materiales::create($aux);
            }
        }

        return redirect()->route('productos')->with('success','Producto creado correctamente');
    }


}
