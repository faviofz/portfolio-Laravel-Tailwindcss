@extends('layout')

@section('title', 'Registro')

@section('content')

    <div class="container mx-auto grid grid-cols-none md:grid-cols-7 lg:grid-cols-3">
        <form action="{{ route('register') }}" method="post"
            class="md:col-start-3 md:col-span-3 lg:col-start-2 lg:col-span-1 flex flex-col bg-white rounded-md shadow-sm p-2 md:px-4 space-y-3 space-y-reverse"
            autocomplete="off">
            @csrf

            <h1 class="text-sky-500 font-semibold text-2xl border-b">Registro</h1>

            @include('partials.validation-errors')

            <label for="name" class="block">
                <span>Nombre:</span>
                <input class="block w-full h-8 bg-slate-200 rounded p-1 placeholder:italic outline-sky-500" type="text"
                    name="name" id="name" placeholder="Nombre...">
            </label>
            <label for="email" class="block">
                <span>
                    Email:
                </span>
                <input class="block w-full h-8 bg-slate-200 rounded p-1 placeholder:italic outline-sky-500" type="email"
                    name="email" id="email" placeholder="Email...">
            </label>
            <label for="password" class="block">
                Contraseña:
                <input class="block w-full h-8 bg-slate-200 rounded p-1 placeholder:italic outline-sky-500" type="password"
                    name="password" id="password" placeholder="Password...">
            </label>

            <label for="password_confirmation" class="block">
                Confirmar contraseña:
                <input class="block w-full h-8 bg-slate-200 rounded p-1 placeholder:italic outline-sky-500" type="password"
                    name="password_confirmation" id="password_confirmation" placeholder="Confirm password...">
            </label>

            <button class="bg-sky-500 p-3 text-white rounded-md md:p-2" type="submit">Registrarme</button>
        </form>
    </div>

@endsection
