<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: aliceblue;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Heladeria Adelita
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="Dashboard" role="button" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-haspopup="true" aria-expanded="false" role="button" class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                            </a>
 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>