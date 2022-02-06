@extends('layout')

@section('title', 'Editar proyecto')

@section('content')
    <div class="container mx-auto p-3 grid grid-cols-none md:grid-cols-4 lg:grid-cols-6">

        <form action="{{ route('project.update', $project) }}" method="POST"
            class="md:col-start-2 md:col-span-2 lg:col-start-3 bg-white rounded-md shadow-md p-2 flex flex-col space-y-1 space-y-reverse"
            enctype="multipart/form-data">

            @method('PATCH')

            @include('projects._form', [
            'btnText' => "Actualizar",
            'h1' => "Editar proyecto"
            ])
        </form>
    </div>
@endsection
