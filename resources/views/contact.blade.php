@extends('layout')

@section('title', 'Contacto')

@section('content')
    <div class="container mx-auto md:w-2/3 lg:w-1/2 xl:w-1/3 2xl:w-1/4">


        <form class="flex flex-col justify-center bg-white shadow-md rounded-md p-2" action="{{ route('contact') }}"
            method="POST">
            @csrf

            <h1 class="font-semibold text-2xl text-sky-500 my-2 border-b">Contacto</h1>

            @include('partials.validation-errors')

            <label for="name">
                Nombre:
            </label>
            <input class="bg-slate-100 rounded-sm px-1 @error('name')
                border-red-500 border-2 @enderror"
                type="text" name="name" id="name">

            <label for="email">
                Correo electrónico:
            </label>
            <input class="bg-slate-100 rounded-sm px-1 @error('name')
                border-red-500 border-2 @enderror"
                type="email" name="email" id="email">

            <label for="subject">
                Asunto:
            </label>
            <input class="bg-slate-100 rounded-sm  px-1 @error('name')
                border-red-500 border-2 @enderror"
                type="text" name="subject" id="subject">

            <label for="content">
                Mensaje:
            </label>
            <textarea class="bg-slate-100 rounded-sm px-1 @error('name')
                border-red-500 border-2 @enderror"
                name="content" id="content" cols="30" rows="5"></textarea>

            <button class="bg-sky-500 rounded-md mt-2 p-2 text-white" type="submit">Enviar</button>
        </form>
    </div>
@endsection
