<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
    @if (Auth::check())
        <h1>Welcome, {{ Auth::user()->name }}</h1>
        <a href="/user/logout"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="/user/logout" method="POST" style="display: none;">
            @csrf
        </form>
    @else
        <h1>Welcome, GUEST</h1>
    @endif
</body>

</html>
