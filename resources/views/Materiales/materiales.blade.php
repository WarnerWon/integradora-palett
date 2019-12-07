@extends('layout')

@section('content')
    
<table class="table table-dark table-striped table-bordered">
    <thead class="thead">
        <tr>
            <th>Número de producto <br>ID</th>
            <th>Material<br> Nombre del material</th>
            <th>Cantidad<br>en stock</th>
            <th>Opciones<div class="pull-right">
                <a href="Creatematerial"> <button type="button" class="btn btn-info">Nuevo</button> </a>
            </div><br></th>
        </tr>
    </thead>
    @foreach ($material as $item)
        <section id="{{ $item->id }}">
            <tr>
  
                <td>{{ $item->id }}</td>
                <td>{{ $item->Nombre }}</td>
                <td>{{ $item->CantidadStock }}</td>
                <td> 
  
                    <a type="btn-danger" href="{{route('Editarmaterial',$item->id )}}" > 
                        <button type="button" class="btn btn-dark">Editar</button>
                      </a>
                  
                  <a type="btn-danger" href="{{route('materialdel', $item->id )}}" > 
                    <button type="button" class="btn btn-danger">Eliminar</button>          
                  </a>
  
                </td>
            </tr>
        </section>
    @endforeach
  </table>
    

@endsection