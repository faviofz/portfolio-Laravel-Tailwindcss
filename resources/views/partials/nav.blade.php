<nav>
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/about">Acerca de</a></li>
        <li><a href="/portfolio">Portafolio</a></li>
        <li><a href="/contact">Contacto</a></li>
        <li>
            @auth
            <a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();
            ">Cerrar sesión</a>
            @else
            <a href="{{ route('login') }}">Iniciar sesión</a> / <a href="{{ route('register') }}">Regitro</a>
            @endauth
        </li>
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
    @csrf
</form>