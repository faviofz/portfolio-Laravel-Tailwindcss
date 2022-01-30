@extends('layout')

@section('title', 'Iniciar sesión')

@section('content')

    <div class="container mx-auto grid grid-cols-none md:grid-cols-3">

        <form class="md:col-start-2 flex flex-col bg-white p-2 rounded-md shadow-md md:p-4 space-y-2"
            action="{{ route('login') }}" method="post">
            @csrf

            <h1 class="text-sky-500 font-semibold border-b text-2xl">Iniciar sesión</h1>

            @include('partials.validation-errors')

            <label class="block" for="email">
                Email:
                <input
                    class="block w-full bg-slate-200 rounded p-1 outline-sky-500 placeholder:italic invalid:outline-red-500 required:text-green-500"
                    type="email" name="email" id="email" placeholder="Email...">
            </label>

            <label class="block" for="password">
                Contraseña:
                <input class="block w-full bg-slate-200 rounded p-1 outline-sky-500 placeholder:italic" type="password"
                    name="password" id="password" placeholder="Contraseña...">
            </label>

            <button class="bg-sky-500 text-white rounded-md my-3 p-1" type="submit">Iniciar sesión</button>
            <hr>
            <div class="text-center mt-2">
                <a class="text-sky-500 hover:underline block" href="#">Olvidé mi contraseña</a>
                <a class="text-sky-500 hover:underline block" href="{{ route('register') }}">Registrarme</a>
            </div>
        </form>
    </div>
@endsection
