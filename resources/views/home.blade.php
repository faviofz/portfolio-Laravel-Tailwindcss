@extends('layout')

@section('title', 'Inicio')

@section('content')
    <div class="container mx-auto p-3 md:p-5 lg:p-10 grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-0">
        <img class="object-cover md:order-last md:col-span-2 md:self-center md:p-3 " src="/img/home.svg" alt="">
        <div class="flex flex-col self-center">
            <h1 class="text-sky-500 text-3xl font-semibold">
                Bienvenido
            </h1>
            <p class="text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci quas deleniti quaerat voluptate hic nihil
                mollitia, dolor illum illo harum eveniet, culpa enim iusto labore, at a possimus fuga exercitationem.
            </p>
            <a class="block my-1 bg-white text-sky-500 border border-sky-500 px-4 py-2 rounded-md shadow-md text-center"
                href="{{ route('project.index') }}">
                Ir al portafolio
            </a>
            <a class="block my-1 bg-sky-500 text-white px-4 py-2 rounded-md shadow-md text-center"
                href="{{ route('about') }}">
                Contáctame
            </a>
        </div>
    </div>
@endsection
