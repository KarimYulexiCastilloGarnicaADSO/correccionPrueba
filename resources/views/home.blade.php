@extends('layouts.app')

@section('content')

<div class="container_sinlaravel">
    <div class="puntos">
        <input type="radio">
        <input type="radio">
    </div>
    <div class="container_title">
        <p class="title_bold">Tu mejor amigo</p>
        <h1 class="title_normal">en casa!</h1>
    </div>
    <div class="texto_centro">Adoptar la mascota perfecta de más de 700 refugios de animales ...</div>
    <div class="imagen"><img src="{{asset ('imagenes/slide1.png')}}" alt="#"></div>
    <div class="flecha"><img src="{{asset('imagenes/chevron-right.svg')}}" alt="#" ></div>
</div>
@endsection
