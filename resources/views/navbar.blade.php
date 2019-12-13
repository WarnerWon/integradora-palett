<nav class="vertical-menu">
    <h1 style="color:aliceblue; font-size:large; text-align: center; margin-top: 1em;">{{ config('app.name', 'Laravel') }}</h1>
    <a title="Panel de control" href="Dashboard" class="{{ Request::is('Dashboard') ? 'active' : '' }}"><span class="icon fa-home"></span></a>
    <a title="Productos" href="productos" class="{{ Request::is('productos') ? 'active' : '' }}"><span class="fas fa-ice-cream"></span></a>
    <a title="Materiales" href="materiales" class="{{ Request::is('materiales') ? 'active' : '' }}"><span class="fas fa-candy-cane"></span></a>
    <a title="Ordenes" href="Ordenes" class="{{ Request::is('Ordenes') ? 'active' : '' }}"><span class="fas fa-boxes"></span></a>
    <a title="Categorias" href="Categorias" class="{{ Request::is('Categorias') ? 'active' : '' }}"><span class="far fa-address-book"></span></a>
    <a title="Unidades de Medida" href="Unidadesmedida" class="{{ Request::is('Unidadesmedida') ? 'active' : '' }}"><span class="fas fa-ruler"></span></a>
    <a title="Usuarios" href="Usuarios" class="{{ Request::is('Usuarios') ? 'active' : '' }}"><span class="fas fa-user" aria-hidden="true"></span></a>
    <a title="Cerrar Sesion" href="{{ route('logout') }}" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>