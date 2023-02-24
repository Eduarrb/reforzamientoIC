@extends('layout.app')

@section('titulo')
    Perfil: {{ $user->username }}
@endsection

@section('contenido')
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen de usuario">
            </div>
            <div class="col-md-6">
                <p class="text-dark-emphasis fs-4">{{ $user->username }}</p>
                <p class="text-secondary fs-6">
                    0
                    <span class="fw-bold">Seguidores</span>
                </p>
                <p class="text-secondary fs-6">
                    0
                    <span class="fw-bold">Siguiendo</span>
                </p>
                <p class="text-secondary fs-6">
                    0
                    <span class="fw-bold">Posts</span>
                </p>
            </div>
        </div>
    </div>
@endsection