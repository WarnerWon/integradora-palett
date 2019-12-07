@extends('layout')

@section('content')

<div class="card" style="background-color: #292F33">
        <div class="card-body" style="padding: 3em; margin-bottom: 1em;">
          <h5 class="card-title" style="color:white">Nuevo producto</h5>
          <form action="{{ url('Nuevoproducto') }}" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                @csrf {{ csrf_field() }}
              
                <label style="color: white">Nombre del producto: </label>
                <input class="form-control" type="text" name="Nombre">
                
                <label style="color: white">Cantidad del paquete (Ten en cuenta que es por masa):</label>
                <select class="form-control" name="CantidadUnique" id="Cant1">
                    <option value="">Selecciona una opcion</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="250">250</option>
                    <option value="500">500</option>
                  </select>
            
                <label style="color: white">Precio de produccion: </label>
                <input class="form-control" type="text" name="Precio_produccion">
                
                <div class="form-row">
                  <div class="col">
                    <label for="Base"style="color: white">Base</label>
                    <select class="form-control" name="contenido[]" id="Base">
                      <option value="">Selecciona una opcion</option>
                      @foreach ($Base as $item)  
                        <option name="Base" value="{{ $item->id }}">{{ $item->Nombre }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col">
                    <label for="Cant1"style="color: white">Cantidad (En litros)</label>
                    <input class="form-control" type="text" name="Cantidad[]">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="Saborizante" style="color: white">Saborizante</label>
                    <select class="form-control" name="contenido[]" id="Saborizante">
                      <option value="">Selecciona una opcion</option>
                      @foreach ($Saborizantes as $item)  
                        <option name="Saborizante" value="{{ $item->id }}">{{ $item->Nombre }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col">
                    <label for="Cant1"style="color: white">Cantidad (En Litros)</label>
                    <input class="form-control" type="text" name="Cantidad[]">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="Desechable" style="color: white">Desechable</label>
                    <select class="form-control" name="contenido[]" id="Desechable">
                      <option value="">Selecciona una opcion</option>
                      @foreach ($Desechables as $item)  
                        <option name="Desechable" value="{{ $item->id }}">{{ $item->Nombre }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col">
                    <label for="Cant1"style="color: white">Cantidad (1 caja x 100 items)</label>
                    <input class="form-control" type="text" name="Cantidad[]">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="Desechable2" style="color: white">Desechable 2 (Opcional)</label>
                    <select class="form-control" name="contenido[]" id="Desechable2">
                      <option value="">Selecciona una opcion</option>
                      @foreach ($Desechables as $item)  
                        <option name="Desechable" value="{{ $item->id }}">{{ $item->Nombre }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col">
                    <label for="Cant1"style="color: white">Cantidad (Opcional) (1 caja x 100 items)</label>
                    <input class="form-control" type="text" name="Cantidad[]">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="Complementos" style="color: white">Complementos (Opcional)</label>
                    <select class="form-control" name="contenido[]" id="Desechable2">
                      <option name="Complementos" value="">Selecciona una opcion</option>
                      @foreach ($Complementos as $item)  
                        <option name="Complementos" value="{{ $item->id }}">{{ $item->Nombre }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col">
                    <label for="Cant1"style="color: white">Cantidad (Opcional) (En kilos)</label>
                    <input class="form-control" type="text" name="Cantidad[]">
                  </div>
                </div>
                <div class="form-row justify-content-end">
                    <button style="margin-top: 1em;" class="btn btn-success" type="submit">Crear</button>
                </div>
            </form>
        </div>
      </div>

@endsection