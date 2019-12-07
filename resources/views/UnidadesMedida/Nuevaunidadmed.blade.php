@extends('layout')

@section('content')


<div class="card" style="background-color: #292F33">
        <div class="card-body">
          <h5 class="card-title" style="color:white">Nueva unidad de medida</h5>
          <form action="{{ url('Nuevaunidadmed') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                @csrf {{ csrf_field() }}
              
                <label style="color: white">Nombre de la unidad de medida: : </label>
                <input type="text"  name="Nombre"><br>
    
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
            
            </form>
        </div>
      </div>


    
@endsection