<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\materiales;
use DB;

class MaterialesController extends Controller
{
    public function index(){
        $material = materiales::all();
        return view('Materiales.materiales',compact('material'));
    }

    public function Destroy($id){
        $material=materiales::find($id);
        $material->delete();

        return redirect('materiales');
    }

    public function Edit($id){

        $material = materiales::find($id);
        
        return view('Materiales.Editarmaterial',compact('material'));

    }

    public function update(Request $request){

        $request->validate([
            'Nombre'=>'required',
            'Categoria_id'=>'required',
            'Unidades_medida_Id'=>'required',
            'CantidadStock'=>'required',
        ]);

        $material = materiales::find($request->id);

        $material->update($request->all());

        return redirect()->route('materiales')->with('success','Actualizado');
    }
    
    public function Createmateriales(){

        return view('Materiales.Nuevomaterial');

    }

    public function store(Request $request){

        materiales::create($request->all());

        return redirect()->route('materiales')->with('success','Material creado correctamente');
    }

}
