@extends('layout')

@section('content')
    
   
<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
          <th>ID</th>
          
          <th>Categoria</th>
          
   
          <th> <a href="Createcategoria"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
        </thead>
    </table>
    
    <div style="align-items: center"  >
      
      
    
      @foreach ($categoria as $item)
          
    
      <div class="row justify-content-md-center">
      
        <div class="col" >
          <div class="card" >
            <a href="#" class="waves-light">

              <div class="card-body info-color text-center">  
              </div>

            </a>
            <div class="card-footer">
              <div class="row">
                  
                <div class="col-md-3 border-right text-center font-weight-bold">
                  {{$item->Nombre}}
                </div>

                <div class="col-md-3 border-left text-center font-weight-bold">
                  {{$item->Descripcion}}
                </div>

                <div class="col-md-3 border-left text-center font-weight-bold">
                    <a type="btn-danger" href="{{route('Categoriasdel', $item->id )}}" > 
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      @endforeach
    

@endsection