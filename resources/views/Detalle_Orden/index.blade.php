@extends('layout')

@section('content')
    <div class="row" style="background-color: white;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ordenes</h2>
            </div>
            <div class="pull-right">
                <form action="{{ url('OrdenesxFecha') }}" method="post">
                    @csrf {{ csrf_field() }}
                    <div class="form-group">
                        <label for="fecha1">
                            Buscar por fechas<span><input style="margin-left:1em;" id="fecha1" name="fecha1" type="date"></span>
                        </label>
                        <label for="fecha2">
                            <span><input style="margin-left:1em;" id="fecha2" name="fecha2" type="date"></span>
                        </label>
                        <button type="submit">Buscar!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="background-color:white">    
        <a class="btn btn-light border-success" href="nuevaOrden"> Añade una nueva Orden</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="justify-content-center">{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-dark table-striped table-bordered" style=" margin-top: 1em;">
        <thead style="background-color: #FFADB1;">
            <tr>
                <th style="color: #803034;">Número de Orden <br> La ID</th>
                <th style="color: #803034;">Fecha de Envio <br> Año/Mes/Dia</th>
                <th style="color: #803034;">Fecha de Orden <br> Año/Mes/Dia</th>
                <th style="color: #803034;">Contenido <br> Productos de la orden</th>
            </tr>
        </thead>
        @foreach ($ordenes as $item)
            <section id="{{ $item->id }}">
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->FechaEnvio }}</td>
                    <td>{{ $item->FechaOrden }}</td>
                    <td>
                        @foreach ($item->Productos as $item2)
                        <li type="1">    
                            {{ $item2->Nombre }} x {{ $item2->Cantidad }} 
                        </li>
                        @endforeach
                    </td>
                </tr>
            </section>
        @endforeach
    </table>

@endsection