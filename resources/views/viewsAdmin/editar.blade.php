@extends('layouts.app')

@section('content')

    <main class="edit">
        <header>
            <h2>Modificar Mascota</h2>
            <a href="{{ route('administrador')}}" class="back"></a>
            <a href="{{ route('home')}}" class="close"></a>
        </header>

        <figure class="photo-preview">
            <img src="{{ asset('imagenes/photo-lg-1.svg')}}" alt="">
        </figure>

        <form action="{{ route('valEditar', $mascota->id) }}" method="POST">

            @csrf

            <input type="text" name="nombre" placeholder="Nombre" value="{{ $mascota->nombre }}">

            <div class="select">
                <select name="raza_id">
                    <option value="{{ $mascota->raza->id }}"> <strong>{{ $mascota->raza->nombre }}</strong> </option>

                    @foreach ($razas as $raza)
                        <option value="{{ $raza->id }}">{{ $raza->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="select">
                <select name="categoria_id">
                    <option value="{{ $mascota->categoria->id }}">{{ $mascota->categoria->nombre }}</option>

                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <input type="text" name="photo" placeholder="Foto" value="{{ $mascota->photo }}">
            {{-- <button type="button" class="upload">Subir Foto</button> --}}

            <div class="select">
                <select name="genero_id">
                    <option value="{{ $mascota->genero->id }}">{{ $mascota->genero->nombre }}</option>
                    
                    @foreach ($generos as $genero)
                        <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="update">Modificar</button>
        </form>
    </main>

@endsection