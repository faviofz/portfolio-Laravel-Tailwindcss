@extends('layout')

@section('title', $project->title)

@section('content')
    <div class="container mx-auto p-3 grid grid-cols-none md:grid-cols-8">
        <div
            class="md:col-start-2 md:col-span-6 bg-white rounded-md shadow-md p-5 flex flex-col md:grid md:grid-cols-2 md:gap-x-2">

            <img class="w-full object-fill rounded-md mb-2 md:mb-0" src="/img/card.svg" alt="test-image">

            <div class="flex flex-col">
                <h1 class="text-sky-500 font-semibold text-xl">{{ $project->title }}</h1>

                <hr class="mb-2">

                <p class="italic text-gray-600 indent-3 grow">{{ $project->description }}. Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit.
                    Maxime, assumenda non
                    quas excepturi eligendi dolor facilis odio, perferendis dicta saepe sit ea debitis voluptatibus vel
                    quibusdam! Sapiente culpa eius deleniti.
                </p>

                <p class="text-gray-400 text-right">{{ $project->created_at->diffForHumans() }}</p>


                @auth
                    <div class="inline-flex justify-end items-center space-x-1 mt-2">
                        <a class="px-3 py-1.5 bg-sky-500 rounded-md text-white font-medium"
                            href="{{ route('project.edit', $project) }}">
                            Editar
                        </a>
                        <a class="px-3 py-1.5 bg-red-500 rounded-md text-white font-medium" href="#"
                            onclick="event.preventDefault();document.getElementById('delete-poject').submit();">
                            Eliminar
                        </a>
                    </div>
                    <form id="delete-project" action="{{ route('project.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                @endauth
            </div>
        </div>
    </div>
@endsection
