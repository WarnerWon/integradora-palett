@extends('layout')

@section('content')

<table class="table table-dark table-striped table-bordered">
    <thead class="thead">
        <tr>
            <th>ID<br>Numero de registro</th>
            <th>Categoria<br>Nombre de la categoria</th>
            <th>Opciones<div class="pull-right">
                <a href="Createunidadmed"> <button type="button" class="btn btn-info">Nuevo</button> </a>
            </div><br></th>
        </tr>
    </thead>
    @foreach ($Unidadmed as $item)
        <section id="{{ $item->id }}">
            <tr>
  
                <td>{{ $item->id }}</td>
                <td>{{ $item->Nombre }}</td>
                <td> 
                  <a type="btn-danger" href="{{route('Unidadesmedidadel', $item->id )}}" > 
                    <button type="button" class="btn btn-danger">Eliminar</button>          
                  </a>
                </td>
            </tr>
        </section>
    @endforeach
  </table>
@endsection