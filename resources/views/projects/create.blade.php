@extends('layout')

@section('title', 'Nuevo proyecto')

@section('content')
    <div class="container mx-auto p-3 grid grid-cols-none md:grid-cols-4 lg:grid-cols-6">

        <form action="{{ route('project.store') }}" method="POST"
            class="md:col-start-2 md:col-span-2 lg:col-start-3 bg-white rounded-md shadow-md p-2 flex flex-col space-y-1 space-y-reverse">

            <h1 class="text-sky-500 font-semibold text-lg">Nuevo proyecto</h1>

            <hr>

            @include('projects._form', ['btnText' => "Guardar"])
        </form>
    </div>
@endsection
