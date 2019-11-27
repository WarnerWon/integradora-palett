@extends('layout')

@section('content')

    <form class="border" style="padding:35px;" action="{{ url('crearOrden') }}" method="POST">
        @csrf {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-sm-4">
                <label class="titulos" for="FechaEnvio">Fecha de Envio:</label>
                <input type="date" name="FechaEnvio" class="form-control" id="FechaEnvio">
            </div>
            <div class="col-sm-4"></div>
            <div class="form-group col-sm-4">    
                <p class="titulos">Contenido:</p>
                @foreach ($productos as $item)
                    <div class="form-inline">
                        <input type="checkbox" name="{{ 'Producto' . ++$i }}" class="form-check" style="margin-right:8px;" id="{{ $item->Nombre }}"> 
                        <label  for="{{ $item->Nombre }}" style="margin-right:8px;">{{ $item->Nombre }} x{{ $item->Cantidad }}</label>
                    <select id="{{ 'Cantidad' . $i }}" class="custom-select my-1 mr-sm-2" name="{{ 'Cantidad' . $i }}">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="row justify-content-end">
                <button type="reset" class="btn btn-light border-danger" style="margin-right:1em;">Limpiar Campos</button>
                <button type="submit" class="btn btn-light border-primary">Guardar</button>
            </div>
        </form>
@endsection