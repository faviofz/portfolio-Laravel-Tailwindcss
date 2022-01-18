@extends('layout')

@section('title', 'Contacto')

@section('content')
<h1>Contacto</h1>
<form action="{{ route('contact') }}" method="POST">
    @csrf
    <label for="name">
        Nombre: <br>
        <input type="text" name="name" id="name"><br>
    </label>
    @error('name')
    {{ $message }} <br>
    @enderror
    <label for="email">
        Email: <br>
        <input type="email" name="email" id="email"><br>
    </label>
    @error('email')
    {{ $message }} <br>
    @enderror
    <label for="subject">
        Asunto: <br>
        <input type="text" name="subject" id="subject"><br>
    </label>
    @error('subject')
    {{ $message }} <br>
    @enderror
    <label for="content">
        Mensaje: <br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
    </label>
    @error('content')
    {{ $message }} <br>
    @enderror
    <button type="submit">Enviar</button>

</form>
@endsection