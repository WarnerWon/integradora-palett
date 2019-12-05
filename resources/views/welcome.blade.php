<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palett</title>
</head>
<body style="background-image: url(images/bg00.jpg)">
    <div>
        <div style="display: inline-block; background-color: #0d1217; width: 100%; padding: 1em; margin: -8px; text-align: end;"">
            @guest
            <a href="{{ route('login') }}" style="color:aliceblue; font-size:large; text-align: center;text-decoration: none; margin-inline-end: 1em">Iniciar Sesion</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" style="color:aliceblue; font-size:large; text-align: center; text-decoration: none; margin-inline-end: 1em">Registrarse</a>
            @endif
            @else
            <a class="color:aliceblue; font-size:large; text-align: center; text-decoration: none; margin-inline-end: 2em" href="#" role="button">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <a class="color:aliceblue; font-size:large; text-align: center; text-decoration: none; margin-inline-end: 2em" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                Salir de sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            @endguest
        </div>
    </div>
    
</body>
</html>