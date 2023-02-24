@extends('layout.app')

@section('titulo')
    Inicia sesión en MiRed
@endsection

@section('contenido')
    <div class="col-md-6">
        <img src="{{ asset('img/login.jpg') }}" alt="Imagen Login USuarios" class="d-block" style="width: 100%">
    </div>
    <div class="col-md-6">
        <form action="{{ route('login') }}" method="post">
            @csrf

            @if (session('mensaje'))
                <div class="text-danger">{{ session('mensaje') }}</div>
            @endif

            <div class="form-group mb-3">
                <label for="email" class="mb-1">Email</label>
                <input type="text" class="form-control @error('email') border-danger @enderror" id="email" name="email" placeholder="ingresa tu email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password" class="mb-1">Password</label>
                <input type="password" class="form-control @error('password') border-danger @enderror" id="password" name="password" placeholder="Ingresa tu password">
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <input type="checkbox" name="remember" id="remember" class="form-check-input me-1">
                <label for="remember">Mantener sesión abierta</label>
            </div>

            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-success" value="Iniciar Sesion">
            </div>
        </form>
    </div>
@endsection