@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <div class="container mx-auto bg-white p-2 rounded-md">

        <h1 class="text-sky-500 font-semibold text-lg border-b">Portafolio</h1>

        @auth
            <a href="{{ route('project.create') }}">Crear nuevo proyecto</a>
        @endauth

        <ul class="">
            @forelse ($projects as $project)
                <li class="border-b last:border-0">
                    <a class="text-sky-500" href="{{ route('project.show', $project) }}">
                        {{ $project->title }}
                    </a>
                    <i class="text-gray-400 block">
                        {{ $project->description }}
                    </i>
                </li>
            @empty
                <li>No hay proyectos para mostrar.</li>
            @endforelse
        </ul>
    </div>

@endsection
