@extends('layout.app')

@section('titulo')
    Registrate en mi Red<strong class="text-primary">Social</strong>
@endsection

@section('contenido')
    <div class="col-md-6">
        <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro" class="d-block" style="width: 100%">
    </div>
    <div class="col-md-6">
        <form action="{{ route('register') }}" method="post">
            {{-- CROSS SITE REQUEST FORGERY --}}
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="mb-1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="ingresa tu Nombre">
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="username" class="mb-1">Nombre de usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="ingresa tu Nombre de usuario">
            </div>
            <div class="form-group mb-3">
                <label for="email" class="mb-1">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="ingresa tu email">
            </div>
            <div class="form-group mb-3">
                <label for="password" class="mb-1">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu password">
            </div>
            <div class="form-group mb-3">
                <label for="password_confirmation" class="mb-1">Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repite password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Crear Cuenta</button>
            </div>
        </form>
    </div>
@endsection