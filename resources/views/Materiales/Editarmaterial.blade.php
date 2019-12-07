@extends('layout')

@section('content')

    
<div class="card" style="background-color: #292F33">
        <div class="card-body">
          <h5 class="card-title" style="color:white">Modificar Producto</h5>
          <form action="{{ url('Actualizarmaterial') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                @csrf {{ csrf_field() }}
                
                <input type="hidden" name="id" value="{{ $material->id }}" >
                <label style="color: white">Material: </label>
                <input type="text" class="form-control" value="{{$material->Nombre}}" name="Nombre"><br>
    
                <label style="color: white">Categoria: </label>
                <input type="text" class="form-control" value="{{$material->Categoria_id}}" name="Categoria_id"><br>

                <label style="color: white">Unidad de medida: </label>
                <input type="text" class="form-control" value="{{$material->Unidades_medida_Id}}" name="Unidades_medida_Id"><br>
    
                <label style="color: white">Cantidad: </label>
                <input type="text" class="form-control" value="{{$material->CantidadStock}}" name="CantidadStock"><br>
    
    
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
           
            </form>
        </div>
</div>


    
@endsection