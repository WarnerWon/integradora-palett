@extends('layout')

@section('content')

<form action="{{ url('Nuevaunidadmed') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
        @csrf {{ csrf_field() }}
      
        <label>Nombre de la unidad de medida: </label>
        <input type="text"  name="Nombre"><br>
    
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    
    </form>
    
@endsection