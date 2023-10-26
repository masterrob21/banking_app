<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       @vite(['resources/sass/app.scss'])
       <link rel="stylesheet" href="/css/app.css">
    </head>
    <body >
        <nav class="nav_bar">
            @if (Route::has('login'))
                <div align="right">
                    @auth
                        <a class="btn btn-secondary btn-lg" href="/home">Dashboard</a>
                        @else
                        <a class="btn btn-primary btn-lg" href="/login">Log in</a>
                    @endauth
                </div>
            @endif
        </nav>
        <main class="welcome">
            <h1>M-40 Banking System</h1>
            <p>The banking app for the future!</p>
        </main>
    </body>
</html>
