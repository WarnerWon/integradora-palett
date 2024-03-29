<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ordenes;
use App\productos;
use App\materiales;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
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
        
        #return view('Dashboard.Index', compact('ordendata', 'productodata', 'materialdata'));
        
        return view('Dashboard.Index', compact('ordendata', 'materialdata'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
