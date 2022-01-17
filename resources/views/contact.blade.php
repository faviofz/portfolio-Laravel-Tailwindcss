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
    <label for="email">
        Email: <br>
        <input type="email" name="email" id="email"><br>
    </label>
    <label for="subject">
        Asunto: <br>
        <input type="text" name="subject" id="subject"><br>
    </label>
    <label for="content">
        Mensaje: <br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
    </label>
    <button type="submit">Enviar</button>

</form>
@endsection