<nav class="vertical-menu">
    <h1 style="color:aliceblue; font-size:large; text-align: center; margin-top: 1em;">{{ config('app.name', 'Laravel') }}</h1>
    <a href="Dashboard" class="{{ Request::is('Dashboard') ? 'active' : '' }}"><span class="icon fa-home"></span></a>
    <a href="view" class="{{ Request::is('view') ? 'active' : '' }}"><span class="icon fa-camera-retro"></span></a>
    <a href="Ordenes" class="{{ Request::is('Ordenes') ? 'active' : '' }}"><span class="icon fa-file-text-o"></span></a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>