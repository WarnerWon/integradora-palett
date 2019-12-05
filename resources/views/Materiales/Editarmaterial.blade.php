@extends('layout')

@section('content')

<form action="{{ url('Actualizarmaterial') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
    @csrf {{ csrf_field() }}
    <input type="hidden" name="no" >
    
    <label>Material: </label>
    <input type="text" value="{{$material->Nombre}}" name="Nombre"><br>
    
    <label>Cantidad: </label>
    <input type="text" value="{{$material->Categoria_id}}" name="Categoria_id"><br>

    <label>Unidad de medida: </label>
    <input type="text" value="{{$material->Unidades_medida_Id}}" name="Unidades_medida_Id"><br>
    
    <label>Cantidad: </label>
    <input type="text" value="{{$material->CantidadStock}}" name="CantidadStock"><br>
    
    <br>
    <button type="submit" class="btn btn-success">Guardar</button>

</form>
    
@endsection