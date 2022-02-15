@extends('layout')

@section('title', Str::title($project->title))

@section('content')
    <div class="container mx-auto p-3 grid grid-cols-none md:grid-cols-8">

        <div
            class="md:col-start-2 md:col-span-6 bg-white rounded-md shadow-md overflow-hidden flex flex-col lg:grid lg:grid-cols-2 lg:gap-x-2">

            @if ($project->image)
                <img class="w-full object-cover" src="{{ asset('storage/' . $project->image) }}"
                    alt="{{ $project->title }}" id="preview">
            @else
                <img class="w-full object-cover" src="/img/card.svg" alt="test-image">
            @endif

            <div class="flex flex-col p-4">
                <h1 class="text-sky-500 font-semibold text-xl first-letter:uppercase">{{ $project->title }}</h1>

                <hr>

                <div class="my-2 flex">

                    @if ($project->category_id)
                        <span
                            class="inline-flex items-center justify-center px-1 py-1 text-xs font-bold leading-none text-white bg-gray-500 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9.243 3.03a1 1 0 01.727 1.213L9.53 6h2.94l.56-2.243a1 1 0 111.94.486L14.53 6H17a1 1 0 110 2h-2.97l-1 4H15a1 1 0 110 2h-2.47l-.56 2.242a1 1 0 11-1.94-.485L10.47 14H7.53l-.56 2.242a1 1 0 11-1.94-.485L5.47 14H3a1 1 0 110-2h2.97l1-4H5a1 1 0 110-2h2.47l.56-2.243a1 1 0 011.213-.727zM9.03 8l-1 4h2.938l1-4H9.031z"
                                    clip-rule="evenodd" />
                            </svg>
                            <a href="{{ route('categories.show', $project->category) }}">
                                {{ $project->category->name }}
                            </a>
                        </span>
                    @endif
                </div>

                <p class="italic text-gray-600 indent-3 grow first-letter:uppercase">{{ $project->description }}. Lorem
                    ipsum dolor sit amet
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
                            href="{{ route('projects.edit', $project) }}">
                            Editar
                        </a>
                        <a class="px-3 py-1.5 bg-red-500 rounded-md text-white font-medium" href="#"
                            onclick="event.preventDefault();document.getElementById('delete-project').submit();">
                            Eliminar
                        </a>
                    </div>
                    <form id="delete-project" action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                @endauth
            </div>
        </div>
    </div>
@endsection
