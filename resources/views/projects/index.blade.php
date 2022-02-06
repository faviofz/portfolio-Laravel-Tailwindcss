@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <div class="container mx-auto p-3">
        <div class="flex justify-between items-end mb-1">

            <h1 class="text-sky-500 font-semibold text-3xl">
                Portafolio
            </h1>

            @auth
                <a class="px-2 py-1 bg-sky-500 rounded text-white" href="{{ route('project.create') }}">
                    Crear proyecto
                </a>
            @endauth
        </div>

        <hr class="mb-3">

        <div
            class="flex flex-col md:flex-row md:flex-wrap justify-around items-center space-y-2
        lg:grid lg:grid-cols-3 lg:grid-rows-3 lg:gap-5">

            @forelse ($projects as $project)
                <div class="bg-white w-full rounded-lg shadow-lg flex flex-col overflow-hidden">

                    @if ($project->image)
                        <img class="w-full object-cover" src="{{ asset('storage/' . $project->image) }}"
                            alt="{{ $project->title }}">
                    @else
                        <img class="w-full object-fill" src="/img/card.svg" alt="test-image">
                    @endif

                    <div class="p-4 flex flex-col justify-between">

                        <h2 class="text-xl first-letter:uppercase truncate font-semibold text-gray-700 mb-3">
                            {{ $project->title }}
                        </h2>

                        <div class="flex justify-between items-center">

                            <a href="{{ route('project.show', $project) }}"
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
