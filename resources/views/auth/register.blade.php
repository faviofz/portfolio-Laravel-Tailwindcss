<form action="{{ route('register') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nombre..."><br>
    <input type="email" name="email" id="email" placeholder="Email..."><br>
    <input type="password" name="password" id="password" placeholder="Password..."><br>
    <input type="password" name="password_confirmation" id="password_confirmation"
        placeholder="Confirm password..."><br>
    <button type="submit">Registrar</button>
</form>

@if ($errors->any)
@foreach ($errors->all() as $error)
{{ $error }} <br>
@endforeach
@endif