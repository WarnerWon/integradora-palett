@extends('layout')

@section('content')

<div style="background-color: white;">
    <form class="border" style="padding:35px;" action="{{ url('crearOrden') }}" method="POST">
        @csrf {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group form-inline">
                <label class="titulos" for="FechaEnvio" style="margin-right: 1em;">Fecha de Envio:</label>
                <input type="date" name="FechaEnvio" class="form-control" id="FechaEnvio">
            </div>
        </div>
        <div style="width: 100%; background-color: grey; height: 1px;"></div>
        <div class="form-row">
            <div class="form-group col-sm-7">    
                <p class="titulos">Contenido:</p>
            </div>
        </div>
        <div class="form-row" style="padding: 4px;">
            @foreach ($productos as $item)
                <div class="form-inline form-group">
                    <li style="display: inline-block;">
                        <input type="checkbox" name="result[]" class="form-check" style="margin-right:8px;" id="{{ $item->Nombre }}" value="{{ $item->id }}"> 
                        <label  for="{{ $item->Nombre }}" style="margin-right:8px; width: 300px;">
                            {{ $item->Nombre }} x{{ $item->Cantidad }}
                        </label>
                    </li>
                </div>
            @endforeach
        </div>
        <div style="width: 100%; background-color: grey; height: 1px;"></div>
        <div class="form-row justify-content-end" style="margin-top: 1em;">
            <button type="reset" class="btn btn-light border-danger" style="margin-right:1em;">Limpiar Campos</button>
            <button type="submit" class="btn btn-light border-primary">Guardar</button>
        </div>
    </form>
</div>
        
@endsection