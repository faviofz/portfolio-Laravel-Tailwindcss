@extends('layout')

@section('title', 'Portafolio')

@section('content')
<h1>Portafolio</h1>

@auth
<a href="{{ route('project.create') }}">Crear nuevo proyecto</a>
@endauth

<ul>
    @forelse ($projects as $project)
    <li><a href="{{ route('project.show', $project ) }}">{{ $project->title }}</a><br> {{ $project->description }}</li>
    @empty
    <li>No hay proyectos para mostrar.</li>
    @endforelse
</ul>

@endsection