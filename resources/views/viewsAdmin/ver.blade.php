@extends('layouts.app')

@section('content')

    <main class="show">
        <header>
            <h2>Consultar Mascota</h2>
            <a href="{{ route('administrador')}}" class="back"></a>
            <a href="{{ route('home')}}" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="{{ asset('imagenes/photo-lg-1.svg')}}" alt="">
        </figure>
        <div>
            <article class="info-name"><p>Reigner</p></article>
            <article class="info-race"><p>Bulldog</p></article>
            <article class="info-category"><p>Perro</p></article>
            <article class="info-gender"><p>Macho</p></article>
        </div>
    </main>

@endsection