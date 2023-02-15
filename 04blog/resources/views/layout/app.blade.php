<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        @vite('resources/css/app.scss')

    </head>
    <body class="bg-dark bg-opacity-10">
        <header class="border-bottom p-5 bg-white">
            <div class="container">
                <div class="row">
                    <nav class="navbar">
                        <h1 class="text-center fs-1">Mi Red<strong class="text-primary">Social</strong></h1>
                        <div class="d-flex">
                            <a href="" class="nav-link px-1 fs-5 text-secondary text-uppercase">login</a>
                            <a href="{{ route('register') }}" class="nav-link px-5 fs-5 text-secondary text-uppercase">crear cuenta</a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <main class="container py-5">
            <div class="row">
                <h2 class="text-center fs-2 mb-5">@yield('titulo')</h2>
                @yield('contenido')
            </div>
        </main>
        <footer class="text-center text-secondary">
            Mi Red<strong class="text-primary">Social</strong> - Todos los derechos reservados {{ now()->year }}
        </footer>
    </body>
</html>
