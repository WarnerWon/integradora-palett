<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <p> {{ $ordenes }}</p>

    <form class="form-inline" action="crearOrden">

        <label for="date">Fecha de Envio :</label>
        <input type="date" class="form-control" id="Fecha_envio" name="Fecha_envio">
        <br>
        <label for="chechbox">Contenido :</label>
        <br>
        <input type="checkbox" class="form-control" id="Producto_id" name="Producto_id">
        <label for="chechbox">paleta 1</label>
        <br>
        <input type="checkbox" class="form-control" id="Producto_id" name="Producto_id">
        <label for="chechbox">paleta 2</label>
        <br>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>