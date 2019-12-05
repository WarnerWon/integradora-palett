@extends('layout')

@section('content')

<form action="{{ url('Nuevacategoria') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
        @csrf {{ csrf_field() }}
      
        <label>Categoria: </label>
        <input type="text"  name="Nombre"><br>
        
        <label>Descripcion: </label>
        <input type="text"  name="Descripcion"><br>
    
    
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    
    </form>
    
@endsection