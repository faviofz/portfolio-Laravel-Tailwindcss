<nav class="bg-white border-gray-200 px-2 py-2.5 sm:px-4 rounded">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ route('home')}}" class="flex">
            {{ config('app.name')}}
        </a>
        <button type="button" id="menu-button" class="inline-flex self-end items-center text-gray-500 md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div id="mobile-menu" class="hidden w-full md:block md:w-auto">
            <ul class="flex flex-col mt-4 text-sm md:flex-row">
                <li>
                    <a href="{{ route('home') }}" class="{{ setActive('home') }} block py-2 px-4 rounded">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ setActive('about') }} block py-2 px-4 rounded">
                        Acerca de</a>
                </li>
                <li>
                    <a href="{{ route('project.index') }}"
                        class="{{ setActive('project.index') }} block py-2 px-4 rounded ">Portafolio</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="{{ setActive('contact') }} block py-2 px-4 rounded ">Contacto</a>
                </li>
                <li>
                    @auth
                    <a href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();
                    " class="{{ setActive('login') }} block py-2 px-4 rounded ">Cerrar sesión</a>
                    @else
                    <a href="{{ route('login') }}" class="{{ setActive('login') }} block py-2 px-4 rounded ">Iniciar
                        sesión</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
    @csrf
</form>