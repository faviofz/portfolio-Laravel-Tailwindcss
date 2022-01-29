<nav class="bg-white border-gray-200 px-4 py-2.5 sm:px-4 rounded border-b shadow">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ route('home') }}" class="flex">
            {{ config('app.name') }}
        </a>
        <button type="button" id="menu-button" class="inline-flex self-end items-center text-gray-500 md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-sky-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-sky-500 hidden" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div id="mobile-menu" class="hidden w-full md:block md:w-auto font-semibold text-gray-500">
            <ul class="flex flex-col mt-4 md:mt-0 md:text-sm md:flex-row">
                <li>
                    <a href="{{ route('home') }}" @class([
                        'block py-2 px-4 rounded border-b md:border-0',
                        'bg-sky-500 text-white md:bg-transparent md:text-sky-500' => request()->routeIs(
                            'home',
                        ),
                    ])>Inicio</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" @class([
                        'block py-2 px-4 rounded border-b md:border-0',
                        'bg-sky-500 text-white md:bg-transparent md:text-sky-500' => request()->routeIs(
                            'about',
                        ),
                    ])>
                        Acerca de</a>
                </li>
                <li>
                    <a href="{{ route('project.index') }}" @class([
                        'block py-2 px-4 rounded border-b md:border-0',
                        'bg-sky-500 text-white md:bg-transparent md:text-sky-500' => request()->routeIs(
                            'project.index',
                        ),
                    ])>Portafolio</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" @class([
                        'block py-2 px-4 rounded border-b md:border-0',
                        'bg-sky-500 text-white md:bg-transparent md:text-sky-500' => request()->routeIs(
                            'contact',
                        ),
                    ])>Contacto</a>
                </li>
                <li>
                    @auth
                        <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            class="block py-2 px-4 rounded text-sky-500 md:bg-sky-500 md:text-white">Cerrar sesión</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="block py-2 px-4 rounded text-sky-500 md:bg-sky-500 md:text-white">Iniciar
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
