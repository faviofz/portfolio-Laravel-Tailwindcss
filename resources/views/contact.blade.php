@extends('layout')

@section('title', 'Contacto')

@section('content')
    <div class="container mx-auto grid grid-cols-none md:grid-cols-4 lg:grid-cols-3">

        <form
            class="md:col-start-2 md:col-span-2 lg:col-start-2 lg:col-span-1 bg-white shadow-md rounded-md p-2 md:p-4 flex flex-col space-y-1"
            action="{{ route('contact') }}" method="POST">
            @csrf

            <h1 class="font-semibold text-2xl text-sky-500 mb-2 border-b">Contacto</h1>

            @include('partials.validation-errors')

            <label class="block" for="name">
                <span>
                    Nombre:
                </span>
                <input
                    class="block w-full h-8 bg-slate-100 rounded-md px-1 @error('name')
                    border-red-500 border-2 outline-none @else outline-sky-500 @enderror"
                    type="text" name="name" id="name">
            </label>

            <label class="block" for="email">
                <span>
                    Correo electrónico:
                </span>
                <input
                    class="block w-full h-8 bg-slate-100 rounded-md px-1 @error('name')
                    border-red-500 border-2 outline-none @else outline-sky-500 @enderror"
                    type="email" name="email" id="email">
            </label>

            <label class="block" for="subject">
                <span>
                    Asunto:
                </span>
                <input
                    class="block w-full h-8 bg-slate-100 rounded-md px-1 @error('name')
                    border-red-500 border-2 outline-none @else outline-sky-500 @enderror"
                    type="text" name="subject" id="subject">
            </label>

            <label class="block" for="content">
                <span>
                    Mensaje:
                </span>
                <textarea
                    class="block w-full bg-slate-100 rounded-md px-1 @error('name')
                    border-red-500 border-2 outline-none @else outline-sky-500 @enderror"
                    name="content" id="content" cols="30" rows="5"></textarea>
            </label>

            <button class="bg-sky-500 rounded-md mt-2 p-2 text-white" type="submit">Enviar</button>
        </form>
    </div>
@endsection
