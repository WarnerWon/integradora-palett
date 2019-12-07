@extends('layout')

@section('content')

<div class="card" style="background-color: #292F33">
        <div class="card-body">
          <h5 class="card-title" style="color:white">Nuevo material</h5>
          <form action="{{ url('Nuevomaterial') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                @csrf {{ csrf_field() }}
              
                <label style="color: white">Material: </label>
                <input type="text"  name="Nombre"><br>
    
                <label style="color: white">Categoria: </label>
                <input type="text"  name="Categoria_id"><br>

                <label style="color: white">Unidad de medida: </label>
                <input type="text"  name="Unidades_medida_Id"><br>

                <label style="color: white">Cantidad en stock: </label>
                <input type="text"  name="CantidadStock"><br>
                
            
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
            
            </form>
        </div>
      </div>



@endsection