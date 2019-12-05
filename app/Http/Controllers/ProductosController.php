<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Productos;

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
            'Nombre'=>'required',
            'Cantidad'=>'required',
            'Precio_produccion'=>'required',

        ]);

        Productos::create($request->all());

        return redirect()->route('productos')->with('success','Actualizado');
    }
    
    public function CreateProducto(){

        return view('productos.Nuevoproducto');

    }

    public function store(Request $request){

        Productos::create($request->all());

        return redirect()->route('productos')->with('success','Producto creado correctamente');
    }


}
