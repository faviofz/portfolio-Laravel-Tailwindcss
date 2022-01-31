@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <div class="container mx-auto p-3 grid grid-cols-none md:grid-cols-6">
        <div class="md:col-start-2 md:col-span-4 p-2 bg-white rounded-md shadow-md">
            <div class="flex justify-between items-end mb-1">
                <h1 class="text-sky-500 font-semibold text-lg">Portafolio</h1>

                @auth
                    <a class="px-2 py-1 bg-sky-500 rounded text-white" href="{{ route('project.create') }}">Crear proyecto</a>
                @endauth
            </div>

            <hr>

            <ul class="">
                @forelse ($projects as $project)
                    <li class="flex justify-between items-center bg-gray-50 rounded shadow-md mt-2 p-1">
                        <a class="text-slate-400 italic" href="{{ route('project.show', $project) }}">
                            {{ $project->title }}
                        </a>
                        <span class="text-sky-500">
                            {{ $project->created_at->format('d-m-Y') }}
                        </span>
                    </li>
                @empty
                    <li>No hay proyectos para mostrar.</li>
                @endforelse
            </ul>
            <div class="mt-5">
                {{ $projects->links() }}
            </div>
        </div>
    </div>

@endsection
