<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="Email...">
    <input type="password" name="password" id="password" placeholder="Password...">
    <button type="submit">Login</button>
</form>