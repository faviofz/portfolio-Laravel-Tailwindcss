@extends('layout')

@section('title', 'Iniciar sesión')

@section('content')

    <div class="container p-3 mx-auto grid grid-cols-none md:grid-cols-7 lg:grid-cols-10">

        <form action="{{ route('login') }}" method="post"
            class="md:col-start-3 md:col-span-3 lg:col-start-5 lg:col-span-2 flex flex-col bg-white p-2 rounded-md shadow-md md:p-4 space-y-2 space-y-reverse">
            @csrf

            <h1 class="text-sky-500 font-semibold border-b text-2xl">Iniciar sesión</h1>

            @include('partials.validation-errors')

            <label class="block" for="email">
                Email:
                <input class="block w-full bg-slate-200 rounded p-1 outline-sky-500 placeholder:italic" type="email"
                    name="email" id="email" placeholder="Email...">
            </label>

            <label class="block" for="password">
                Contraseña:
                <input class="block w-full bg-slate-200 rounded p-1 outline-sky-500 placeholder:italic" type="password"
                    name="password" id="password" placeholder="Contraseña...">
            </label>

            <button class="bg-sky-500 text-white rounded-md p-3 md:p-2" type="submit">Iniciar sesión</button>
            <hr>
            <div class="text-center">
                <a class="text-sky-500 hover:underline block" href="#">Olvidé mi contraseña</a>
                <a class="text-sky-500 hover:underline block -mb-2" href="{{ route('register') }}">Registrarme</a>
            </div>
        </form>
    </div>
@endsection
