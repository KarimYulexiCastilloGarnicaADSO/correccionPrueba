<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Genero;
use App\Models\Mascota;
use App\Models\Raza;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
         // $users = User::paginate(20);
         $users = User::paginate(20);
         $mascotas = Mascota::paginate(20);
        
        //  dd($mascotas);
         return view('home', compact('users' , 'mascotas'));
    }

    public function administrador()
    {
        $mascotas = Mascota::paginate(100);
        
        // condicional de vuelta

        return view('viewsAdmin/actionsPets' , compact('mascotas'));
    }

    public function agg()
    {
        // Creamos variables para asignar, pasar y ver los datos que se encuentran en las tablas razas, categorias y razas
        $razas = Raza::paginate(20);
        $categorias = Categoria::paginate(20);
        $generos = Genero::paginate(20);

        return view('viewsAdmin/agregar', compact('razas', 'categorias', 'generos'));
    }

    public function ver($id)
    {
        $mascota = Mascota::find($id);

        return view('viewsAdmin/ver', compact('mascota'));
    }


    public function editar($id)
    {
        $razas = Raza::paginate(20);
        $categorias = Categoria::paginate(20);
        $generos = Genero::paginate(20);

        $mascota = Mascota::find($id);

        return view('viewsAdmin/editar', compact('razas', 'categorias', 'generos','mascota'));
    }

    public function eliminar($id)
    {
        $mascota = Mascota::find($id);

        $mascota->delete();

        $mascotas = Mascota::paginate(100);
        
        return view('viewsAdmin/actionsPets' , compact('mascotas'));

    }
}
