<!DOCTYPE html>
<html lang="en" class="font-sans">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title class="first-letter:uppercase">@yield('title')</title>
</head>

<body class="flex flex-col justify-between h-screen bg-slate-100">
    <header>
        @include('partials.nav')
        @include('partials.session-status')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="py-3 text-center border-t bg-white text-gray-400">
        {{ config('app.name') }} | Copyright {{ date('Y') }}
    </footer>
</body>

<script src="/js/app.js"></script>

</html>
