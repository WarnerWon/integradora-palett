<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Unidades_medidas;
use DB;

class UnidadesMedidaController extends Controller
{
    public function index(){
        $Unidadmed = Unidades_medidas::all();
        return view('UnidadesMedida.UnidadesMedida',compact('Unidadmed'));
    }

    #public function delete($id){
        
        #$unidad=Unidades_Medidas::findOrFail($id);
        #Unidades_MedidasDB::delete($unidad);
        #DB::delete('delete Unidades_medidas where id = ?', [$request]);
        #return view('UnidadesMedida.UnidadesMedida')->with('Hecho', 'Se ha eliminado el dato correctamente');

    #}

    public function destroy($id){
        
        $Unidadmed=Unidades_medidas::find($id);
        $Unidadmed->delete();
        return redirect('Unidadesmedida');
    }

    public function Edit($id){

        $Unidadmed = Unidades_medidas::find($id);
        
        return view('UnidadesMedida.UnidadesMedida',compact('Unidadmed'));

    }

    public function update(Request $request){

        $request->validate([
            'Nombre'=>'required',
        ]);

        Unidades_medidas::create($request->all());

        return redirect()->route('Unidadesmedida')->with('success','Actualizado');
    }
    
    public function Createunidadmed(){

        return view('UnidadesMedida.Nuevaunidadmed');

    }

    public function store(Request $request){

        Unidades_medidas::create($request->all());

        return redirect()->route('Unidadesmedida')->with('success','Material creado correctamente');
    }

}