@extends('layout.app')

@section('titulo')
    Tu cuenta
@endsection

@section('contenido')
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen de usuario">
            </div>
            <div class="col-md-6">
                <p class="text-secondary fs-5">{{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>
@endsection