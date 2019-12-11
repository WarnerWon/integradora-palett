<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuestros Productos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-image: url(/images/NuestrosProductos.jpg);background-position: center; background-repeat: no-repeat;
background-size: cover; position: relative;">
    
    @include('layouts.navbar2')

    <div class="container" style="margin-top: 1em;">
            <div id="carouselSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner6.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

    <div class="container" style="margin-top: 1em;">
           
    
    
        
        <div style="float: left">

                <ul class="list-unstyled">
                    
                        <li class="media"  style="float:left">
                            <img src="images/Maquinaria.png" class="mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Productos</h5>
                                 • Neveras
                                <br/>• Fabricadores de paletas
                                <br/>• Refrigeradores y congeladores
                                <br/>• Maquinas industriales
                                <br>
                                <br/>
                            </div>
                        </li>

                        <li class="media" style="float: left">
                            <img src="images/MateriaPrima.png" class="mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Materia prima</h5>
                                  • Paletas
                                <br/>• Helados
                                <br/>• Productos lacteos
                                <br/>• Concentrados y colorantes
                                <br>
                                <br/>
                            </div>
                        </li>

                        <li class="media" style="float: left">
                            <img src="images/Servicios.png" class="mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Servicios</h5>
                                  • Asesoría especializada
                                <br/>• Cursos de capacitación
                                <br/>• Diseño y remodelación de locales
                                <br>
                                <br/>
                            </div>
                        </li>

                    </ul>
                
        </div>
    
</body>
</html>