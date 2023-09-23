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
            <article class="info-name"><p> {{ $mascota->nombre }} </p></article>
            <article class="info-race"><p> {{ $mascota->raza->nombre }} </p></article>
            <article class="info-category"><p> {{ $mascota->categoria->nombre }} </p></article>
            <article class="info-gender"><p> {{ $mascota->genero->nombre }} </p></article>
            <p class="text-white text-center"> {{ $mascota->id }} <p> 
        </div>
    </main>

@endsection