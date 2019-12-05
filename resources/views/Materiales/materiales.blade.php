@extends('layout')

@section('content')
    
<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
          <th>ID</th>
          
          <th>Producto</th>
          
          <th>Cantidad</th>
          
          <th> <a href="Creatematerial"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
        </thead>
    </table>
    
    <div style="align-items: center"  >
      
      
    
      @foreach ($material as $item)
          
    
      <div class="row justify-content-md-center">
        <!--FIRST CARD-->
        <div class="col" >
          <div class="card" >
            <a href="#" class="waves-light">
              <div class="card-body info-color text-center">
                
              </div>
            </a>
            <div class="card-footer">
              <div class="row">
                  <div class="col-md-3 border-right text-center font-weight-bold">
                      {{$item->id}}
                  </div>
                <div class="col-md-3 border-right text-center font-weight-bold">
                  {{$item->Nombre}}
                </div>
                <div class="col-md-3 border-left text-center font-weight-bold">
                  {{$item->CantidadStock}}
                </div>
                <div class="col-md-3 border-left text-center font-weight-bold">

                    <a type="btn-danger" href="{{route('Editarmaterial',$item->id )}}" > 
                        <button type="button" class="btn btn-danger">Editar</button>
                      </a>
                  
                  <a type="btn-danger" href="{{route('materialdel', $item->id )}}" > 
                    <button type="button" class="btn btn-danger">Eliminar</button>          
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--GRID ROW-->
      @endforeach
    

@endsection