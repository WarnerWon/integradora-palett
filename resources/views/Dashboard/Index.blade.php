@extends('layout')

@section('content')

    <div class="container">
        <h1 style="background-color: lavender;" class="text-info">Las ultimas órdenes</h1>
        <div class="row ">
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
        <h3 class="text-danger" style="margin-top: 2em; background-color: lightcoral;">Atención! estos materiales estan a punto de acabarse!</h3>
    </div>
    
@endsection