@extends('layout')

@section('content')

<form action="{{ url('Nuevomaterial') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
    @csrf {{ csrf_field() }}
  
    <label>Material: </label>
    <input type="text"  name="Nombre"><br>
    
    <label>Categoria: </label>
    <input type="text"  name="Categoria_id"><br>

    <label>Unidad de medida: </label>
    <input type="text"  name="Unidades_medida_Id"><br>

    <label>Cantidad en stock: </label>
    <input type="text"  name="CantidadStock"><br>
    

    <br>
    <button type="submit" class="btn btn-success">Guardar</button>

</form>

@endsection