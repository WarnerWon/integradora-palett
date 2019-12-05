@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ordenes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-light border-success" href="nuevaOrden"> Añande una nueva Orden</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="justify-content-center">{{ $message }}</p>
        </div>
    @endif

    @foreach ($ordenes as $item)
    <section id="{{ $item->id }}" style="display:inline-block; margin-top: 1em;">
    <div class="card text-white bg-dark mb-3" style="width: 480px; margin-right: 1em;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="images/pink_pop.png" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Orden Numero : {{ $item->id }}</h5>
                    <p class="card-text">Fecha de envio : {{ $item->FechaEnvio }} <br>
                            Fecha de orden : {{ $item->FechaOrden }} <br>
                            Contiene:</p>
                    <ul>
                    @foreach ($item->Productos as $item2)
                    <li><p class="card-text"> {{ $item2->Nombre }} </p></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </section>
    @endforeach
@endsection