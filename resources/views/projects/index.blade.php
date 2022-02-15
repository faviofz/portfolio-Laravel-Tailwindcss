@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <div class="container mx-auto p-3">
        <div class="flex justify-between items-end mb-1">

            @isset($category)
                <div>
                    <h1 class="text-sky-500 font-semibold text-3xl">
                        {{ $category->name }}
                    </h1>
                    <a class="text-gray-400 font-semibold hover:underline" href="{{ route('projects.index') }}">Volver</a>
                </div>
            @else
                <h1 class="text-sky-500 font-semibold text-3xl">
                    Portafolio
                </h1>
            @endisset


            @auth
                <a class="px-2 py-1 bg-sky-500 rounded text-white" href="{{ route('projects.create') }}">
                    Crear proyecto
                </a>
            @endauth
        </div>

        <hr class="mb-3">

        <div
            class="flex flex-col justify-around items-center space-y-2 md:space-y-8 lg:space-y-0 lg:grid lg:grid-cols-3 lg:grid-rows-3 lg:gap-5">

            @forelse ($projects as $project)
                <div class="bg-white w-full rounded-lg shadow-lg flex flex-col overflow-hidden container">

                    @if ($project->image)
                        <img class="w-full object-cover h-60 md:h-96 lg:h-[21rem]"
                            src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    @else
                        <img class="w-full object-cover h-60 md:h-96" src="/img/card.svg" alt="test-image">
                    @endif

                    <div class="p-4 flex flex-col justify-between">

                        <h2 class="text-xl first-letter:uppercase truncate font-semibold text-gray-700">
                            {{ $project->title }}
                        </h2>

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

                        <div class="flex justify-between items-center">

                            <a href="{{ route('projects.show', $project) }}"
                                class="px-3 py-1.5 bg-sky-500 text-white rounded-md">
                                Ver mas
                            </a>
                            <span class="text-sky-500">
                                {{ $project->created_at->format('d-m-Y') }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <li>No hay proyectos para mostrar.</li>
            @endforelse
        </div>
        <div class="mt-5">
            {{ $projects->links() }}
        </div>
    </div>

@endsection
