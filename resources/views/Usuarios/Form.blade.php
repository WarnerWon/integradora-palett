@extends('layout')

@section('content')


<div class="card" style="background-color: #292F33">
        <div class="card-body" style="padding: 3em; margin-bottom: 1em;">
          <h5 class="card-title" style="color:white">Nuevo Usuario</h5>
          
          <form action="{{ url('SaveUser') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                @csrf {{ csrf_field() }}
              
                <label style="color: white">Nombre del usuario: </label>
                <input class="form-control" type="text" name="Nombre">
                
            
                <label style="color: white">Correo electronico: </label>
                <input class="form-control" type="text" name="Email">
                
                
                <label style="color: white">Password: </label>
                <input class="form-control" type="password" name="Password">
                
    
               
    
                <div class="form-row justify-content-end">
                    <button style="margin-top: 1em;" class="btn btn-success" type="submit">Crear</button>
                </div>
            </form>
        </div>
      </div>

@endsection