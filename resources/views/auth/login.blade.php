@extends('layout')

@section('title', 'Iniciar sesión')

@section('content')

    <div class="container">

        <form class="flex flex-col bg-white p-2 rounded-md" action="{{ route('login') }}" method="post">
            @csrf

            <h1 class="text-sky-500 font-semibold border-b text-2xl">Iniciar sesión</h1>

            @include('partials.validation-errors')

            <input class="bg-slate-200 rounded mt-2 p-1" type="email" name="email" id="email" placeholder="Email...">

            <input class="bg-slate-200 rounded mt-2 p-1" type="password" name="password" id="password"
                placeholder="Contraseña...">

            <button class="bg-sky-500 text-white rounded-md mt-2 p-1" type="submit">Iniciar sesión</button>
        </form>
        <div class="text-center mt-2">
            <a class="text-sky-500 hover:underline" href="#">Olvidé mi contraseña</a> -
            <a class="text-sky-500 hover:underline" href="{{ route('register') }}">Registrarme</a>
        </div>
    </div>
@endsection
