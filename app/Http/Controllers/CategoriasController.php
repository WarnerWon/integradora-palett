<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categorias;
use DB;

class CategoriasController extends Controller
{
    public function index(){

        $categoria = Categorias::all();
        
        return view('Categorias.categorias',compact('categoria'));
    
    }
    
    public function Destroy($id){
    
        $categoria=Categorias::find($id);
    
        $categoria->delete();

        return redirect('Categorias');
    
    }

    public function Createcategorias(){

        return view('Categorias.Nuevacategoria');

    }

    public function store(Request $request){

        Categorias::create($request->all());

        return redirect()->route('categorias')->with('success','Material creado correctamente');
    
    }

}
