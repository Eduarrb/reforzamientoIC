@extends('layout.app')

@section('titulo')
    Crea un post
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="col-md-6">
        <form action="{{ route('imagenes.store') }}" method="post" enctype="multipart/form-data" class="dropzone border d-flex justify-content-center" id="dropzone">
            @csrf
        </form>
    </div>
    <div class="col-md-6">
        <form action="" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="titulo" class="mb-1">Título</label>
                <input type="text" class="form-control @error('titulo') border-danger @enderror" id="titulo" name="titulo" placeholder="ingresa tu titulo" value="{{ old('titulo') }}">
                @error('titulo')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="descripcion" class="mb-1">Descripción</label>
                <textarea name="descripcion" id="descripcion" placeholder="Descripción del post" class="form-control @error('descripcion') border-danger @enderror">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary" value="Crear post">
            </div>
        </form>
    </div>
@endsection