@extends('layout')

@section('content')

<table class="table table-dark table-striped table-bordered">
    <thead class="thead">
        <tr>
            <th>ID <br>
            <th>Nombre del usuario <br></th>
            <th>Correo electronico<br></th>
            
            <th>Opciones<div class="pull-right">
                <a href="NewUser"> <button type="button" class="btn btn-info">Agregar</button> </a>
            </div><br></th>
        </tr>
    </thead>
    @foreach ($users as $item)
        <section id="{{ $item->id }}">
            <tr>
  
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email}}</td>
                <td> 
  
                    
  
                </td>
            </tr>
        </section>
    @endforeach
  </table>

@endsection