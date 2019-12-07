@extends('layout')

@section('content')

<!--
<div class="row" style="margin: 0 auto" align="center">
  <div class="col-lg-12 margin-tb" style="color: white; background-color: black">
      <div class="pull-left">
          <h2>Productos</h2>
      </div>
      <div class="pull-right">
          <a href="Createproducto"> <button type="button" class="btn btn-info">Nuevo</button> </a>
      </div>
  </div>
</div>
-->


<table class="table table-dark table-striped table-bordered">
  <thead class="thead">
      <tr>
          <th>Número de producto <br>ID</th>
          <th>Producto<br> Nombre del producto</th>
          <th>Cantidad<br>en stock</th>
          <th>Opciones<div class="pull-right">
              <a href="Createproducto"> <button type="button" class="btn btn-info">Nuevo</button> </a>
          </div><br></th>
      </tr>
  </thead>
  @foreach ($producto as $item)
      <section id="{{ $item->id }}">
          <tr>

              <td>{{ $item->id }}</td>
              <td>{{ $item->Nombre }}</td>
              <td>{{ $item->Cantidad }}</td>
              <td> 

                    <a href="{{route('Editarproductos', $item->id )}}"> 
                      <button type="button" class="btn btn-dark">Editar</button>
                    </a>
                  
                    <a type="btn-danger" href="{{route('Productosdel', $item->id )}}" > 
                      <button type="button" class="btn btn-danger">Eliminar</button>
                    </a>

              </td>
          </tr>
      </section>
  @endforeach
</table>

@endsection

