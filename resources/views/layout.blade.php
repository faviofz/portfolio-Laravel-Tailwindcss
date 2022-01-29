<!DOCTYPE html>
<html lang="en" class="font-sans">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    @include('partials.nav')

    @include('partials.session-status')

    @yield('content')
</body>

<script src="/js/app.js"></script>

</html>
