<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MiRed - @yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        @vite('resources/css/app.scss')

    </head>
    <body class="bg-dark bg-opacity-25">
        <header class="border-bottom p-5 bg-white">
            <div class="container">
                <div class="row">
                    <nav class="navbar">
                        <h1 class="text-center fs-1">Mi Red<strong class="text-primary">Social</strong></h1>
                        @auth
                            <div class="d-flex align-items-center">
                                <a href="{{ route('posts.create') }}" class="nav-link d-flex me-3 text-uppercase fw-bold">
                                    <span style="width:20px" class="me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                          </svg>
                                    </span>
                                    <span>
                                        Crear                            
                                    </span>
                                </a>
                                <a href="{{ route('post.index', auth()->user()->username) }}" class="nav-link">Hola: <span class="text-info">{{ auth()->user()->username }}</span></a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn text-uppercase">Cerrar Sesion</button>
                                </form>
                            </div>
                        @endauth
                        @guest
                            <div class="d-flex">
                                <a href="{{ route('login') }}" class="nav-link px-1 fs-5 text-secondary text-uppercase">login</a>
                                <a href="{{ route('register') }}" class="nav-link px-5 fs-5 text-secondary text-uppercase">crear cuenta</a>
                            </div>
                        @endguest
                    </nav>
                </div>
            </div>
        </header>
        <main class="container py-5">
            <div class="row justify-content-md-center">
                <h2 class="text-center fs-2 mb-5">@yield('titulo')</h2>
                @yield('contenido')
            </div>
        </main>
        <footer class="text-center text-secondary">
            Mi Red<strong class="text-primary">Social</strong> - Todos los derechos reservados {{ now()->year }}
        </footer>
    </body>
</html>
