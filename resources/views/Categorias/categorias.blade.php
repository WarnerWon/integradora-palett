@extends('layout')

@section('content')
    
<table class="table table-dark table-striped table-bordered">
    <thead class="thead">
        <tr>
            <th>ID<br>Numero de registro</th>
            <th>Categoria<br>Nombre de la categoria</th>
            <th>Descripcion<br>Aclarando un poco lo que es cada categoria</th>
            <th>Opciones<div class="pull-right">
                <a href="Createcategoria"> <button type="button" class="btn btn-info">Nuevo</button> </a>
            </div><br></th>
        </tr>
    </thead>
    @foreach ($categoria as $item)
        <section id="{{ $item->id }}">
            <tr>
  
                <td>{{ $item->id }}</td>
                <td>{{ $item->Nombre }}</td>
                <td>{{ $item->Descripcion }}</td>
                <td> 
  
                  <a type="btn-danger" href="{{route('Categoriasdel', $item->id )}}" > 
                    <button type="button" class="btn btn-danger">Eliminar</button>          
                  </a>
  
                </td>
            </tr>
        </section>
    @endforeach
  </table>   

@endsection