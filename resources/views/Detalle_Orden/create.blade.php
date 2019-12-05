@extends('layout')

@section('content')

    <form class="border" style="padding:35px;" action="{{ url('crearOrden') }}" method="POST">
        @csrf {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-sm-7">    
                <p class="titulos">Contenido:</p>
                @foreach ($productos as $item)
                    <div class="form-inline">
                        <li style="display: inline-block;">
                            <input type="checkbox" name="result[]" class="form-check" style="margin-right:8px;" id="{{ $item->Nombre }}" value="{{ $item->id }}"> 
                            <label  for="{{ $item->Nombre }}" style="margin-right:8px; width: 300px;">
                                {{ $item->Nombre }} x{{ $item->Cantidad }}
                            </label>
                        </li>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="form-group col-sm-3">
                <label class="titulos" for="FechaEnvio">Fecha de Envio:</label>
                <input type="date" name="FechaEnvio" class="form-control" id="FechaEnvio">
            </div>
            <div class="row justify-content-end">
                <button type="reset" class="btn btn-light border-danger" style="margin-right:1em;">Limpiar Campos</button>
                <button type="submit" class="btn btn-light border-primary">Guardar</button>
            </div>
        </form>
@endsection