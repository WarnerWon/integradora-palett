@extends('layout')

@section('content')
    
<div class="card" style="background-color: #292F33">
        <div class="card-body">
          <h5 class="card-title" style="color:white">Modificar Producto</h5>
          <form action="{{ url('Actualizarproducto') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                @csrf {{ csrf_field() }}

                <label style="color: white">Id Producto: </label>
                <input class="form-control" name="id" type="text" value="{{$producto->id}}" placeholder="{{$producto->id}}" readonly><br>
                
                <label style="color: white">Producto: </label>
                <input class="form-control" type="text" value="{{$producto->Nombre}}" name="Nombre"><br>
                
                <label style="color: white">Cantidad: </label>
                <input class="form-control" type="text" value="{{$producto->Cantidad}}" name="Cantidad"><br>
    
                <label style="color: white">Precio de produccion: </label>
                <input class="form-control" type="text" value="{{$producto->Precio_produccion}}" name="Precio_produccion"><br>
                
    
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
           
            </form>
        </div>
</div>
@endsection