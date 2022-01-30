@extends('layout')

@section('title', 'Registro')

@section('content')

    <div class="container mx-auto">
        <form class="flex flex-col bg-white rounded-md shadow-sm p-2 md:p-4" action="{{ route('register') }}"
            method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nombre..."><br>
            <input type="email" name="email" id="email" placeholder="Email..."><br>
            <input type="password" name="password" id="password" placeholder="Password..."><br>
            <input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Confirm password..."><br>
            <button type="submit">Registrar</button>
        </form>
    </div>

@endsection
