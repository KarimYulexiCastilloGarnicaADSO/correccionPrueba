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
        <form action="" method="post">
            <input type="text" name="name" placeholder="Nombre" value="Reigner">
            <div class="select">
                <select name="raza">
                    <option value="">Seleccione Raza...</option>
                    <option value="1">Corgi</option>
                    <option value="2" selected>Bulldog</option>
                </select>
            </div>
            <div class="select">
                <select name="raza">
                    <option value="">Seleccione Categoría...</option>
                    <option value="1" selected>Perro</option>
                    <option value="2">Gato</option>
                </select>
            </div>
            <button type="button" class="upload">Subir Foto</button>
            <div class="select">
                <select name="raza">
                    <option value="">Seleccione Genero...</option>
                    <option value="1">Hembra</option>
                    <option value="2" selected>Macho</option>
                </select>
            </div>
            <button class="update">Modificar</button>
        </form>
    </main>

@endsection