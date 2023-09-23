@extends('layouts.app')

@section('content')

    <main class="dashboard">
        <header>
            <h2>Administrar Mascotas</h2>
            <a href="{{ route('home')}}" class="close"></a>
        </header>

        <a href="{{ route('agg')}}" class="add"></a>   

        <table>
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>
                        <figure class="photo">
                            <img src="{{ asset('imagenes/photo-sm-1.svg') }}" alt="">
                        </figure>
                        
                        <div class="info">
                            <h3>{{ $mascota->nombre }}</h3>
                            <h4>{{ $mascota->raza->nombre }}</h4>
                            <h4>{{ $mascota->id }}</h4>
                        </div>
                        <div class="controls">
                            <a href="{{ route('ver', $mascota->id) }}" class="show"></a>
                            <a href="{{ route('editar', $mascota->id) }}" class="edit"></a>
                            <a href="{{ route('eliminar', $mascota->id) }}" class="delete"></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>

@endsection
