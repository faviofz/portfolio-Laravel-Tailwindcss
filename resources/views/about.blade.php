@extends('layout')

@section('title', 'Quién soy')

@section('content')
    <div class="container mx-auto p-3 md:p-5 lg:p-10 grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-0 ">
        <img class="object-cover lg:w-2/3 md:order-last md:col-span-2 md:self-center md:p-3 lg:justify-self-center"
            src="/img/about1.svg" alt="">
        <div class="flex flex-col self-center">
            <h1 class="text-sky-500 text-3xl font-semibold">
                Quién soy
            </h1>
            <p class="text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eum veniam nostrum a dolorum repudiandae
                beatae quod praesentium. Voluptatem corrupti libero, fugiat reprehenderit delectus voluptatum incidunt
                quaerat tempora accusantium quidem.
            </p>
            <a class="block my-1 bg-white text-sky-500 border border-sky-500 px-4 py-2 rounded-md shadow-md text-center"
                href="{{ route('projects.index') }}">
                Ir al portafolio
            </a>
            <a class="block my-1 bg-sky-500 text-white px-4 py-2 rounded-md shadow-md text-center"
                href="{{ route('about') }}">
                Contáctame
            </a>
        </div>
    </div>
@endsection
