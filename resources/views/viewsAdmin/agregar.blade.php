@extends('layouts.app')

@section('content')

    <main class="add">
        <header>
            <h2>Adicionar Mascota</h2>
            <a href="{{ route('administrador')}}" class="back"></a>
            <a href="{{ route('home')}}" class="close"></a>
        </header>

        <figure class="photo-preview">
            <img src="{{ asset('imagenes/photo-lg-0.svg') }}" alt="">
        </figure>

        <form action="{{ route('agregar') }}" method="POST">

            @csrf

            <input type="text" name="nombre" placeholder="Nombre">

            <div class="select">
                <select name="raza_id">
                    
                    <option value="">Seleccione Raza...</option>

                    @foreach ($razas as $raza)
                        <option value="{{ $raza->id }}">{{ $raza->nombre }}</option>
                    @endforeach

                </select>
            </div>

            <div class="select">
                <select name="categoria_id">
                    <option value="">Seleccione Categoría...</option>

                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach

                </select>
            </div>
        
            <input type="text" name="photo" placeholder="hola">
            {{-- <button type="button" class="upload" name="foto">Subir Foto</button> --}}

            <div class="select">
                <select name="genero_id">

                    <option value="">Seleccione Genero...</option>

                    @foreach ($generos as $genero)
                        <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="save">Guardar</button>
        </form>

    </main>

@endsection