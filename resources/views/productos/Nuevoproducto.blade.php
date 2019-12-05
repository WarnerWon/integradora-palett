@extends('layout')

@section('content')

<form action="{{ url('Nuevoproducto') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
    @csrf {{ csrf_field() }}
  
    <label>Producto: </label>
    <input type="text"  name="Nombre"><br>
    
    <label>Cantidad: </label>
    <input type="text"  name="Cantidad"><br>

    <label>Precio de produccion: </label>
    <input type="text"  name="Precio_produccion"><br>
    

    <br>
    <button type="submit" class="btn btn-success">Guardar</button>

</form>

@endsection