@extends('layout')

@section('content')

    <div class="container" style="background-color: white; padding: 3em">
        <h1 style="background-color: lavender; padding: 20px;" class="text-info">Las ultimas órdenes</h1>
        <div class="row">
            @foreach ($ordendata as $item)
                <div class="col-sm-4">
                    <div class="card border-info">
                        <div class="card-body">
                            <h5 class="card-title text-info">Número de orden: {{ $item->id }}</h3>
                            <p class="card-text text-info">Fecha de orden: {{ $item->FechaOrden }}</p>
                            <p class="card-text text-info">Fecha de envio: {{ $item->FechaEnvio }}</p>
                            <a href="Ordenes#{{ $item->id }}" class="btn btn-primary">Ver orden detallada</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h3 class="text-danger" style="margin-top: 2em; background-color: lightcoral; padding: 1em;">
            Atención! estos materiales estan a punto de acabarse!
        </h3>
        <div class="row">
            @foreach ($materialdata as $item)
                <div class="col-sm-4">
                    <div class="card border-danger">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Material: {{ $item->Nombre }}</h5>
                            <h5 class="card-title text-danger">Categoria: {{ $item->Tipo->Nombre }}</h5>
                            <p class="card-text text-danger">Cantidad en stock: {{ $item->CantidadStock }}  {{ $item->Medida->Nombre }}(s)</p>
                            <a href="materiales#{{ $item->id }}" class="btn btn-danger">Ver Material</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            
        </div>
    </div>
    
@endsection