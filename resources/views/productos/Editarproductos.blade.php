@extends('layout')

@section('content')
    
<div >
 
    
    <div id="contenido">
        <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
            <span> <h1>Modificar Producto</h1> </span>
            <br>
        <form action="{{ url('Actualizarproducto') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
            @csrf {{ csrf_field() }}
            
            <input type="hidden" name="no" >
            <label>Id Producto: </label>
            <input type="text" value="{{$producto->id}}" name="id" ><br>
            
            <label>Producto: </label>
            <input type="text" value="{{$producto->Nombre}}" name="Nombre"><br>
            
            <label>Cantidad: </label>
            <input type="text" value="{{$producto->Cantidad}}" name="Cantidad"><br>

            <label>Precio de produccion: </label>
            <input type="text" value="{{$producto->Precio_produccion}}" name="Precio_produccion"><br>
            

            <br>
            <button type="submit" class="btn btn-success">Guardar</button>
       
        </form>
        </div>
        
    </div>
    
  </div>


@endsection