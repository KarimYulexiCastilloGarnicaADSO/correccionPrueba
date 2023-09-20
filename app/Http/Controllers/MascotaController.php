<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function guardar(Request $request){
        
        /*VALIDO LOS DATOS DEL FORMULARIO */

        $request->validate([

            'nombre'=>	'required|string|max:50',
            'raza_id' => 'required',
            'categoria_id' => 'required',
            'photo' => 'required',
            'genero_id'	=> 'required',
            
        ]);

        /*PARA CREAR UN NUEVO PERFIL Y ASIGNAR LOS DATOS: */
        $perfilMascota = new Mascota();

        $perfilMascota->nombre = $request->nombre;
        $perfilMascota->raza_id = $request->raza_id;
        $perfilMascota->categoria_id = $request->categoria_id;
        $perfilMascota->photo = $request->photo;
        $perfilMascota->genero_id = $request->genero_id;

        // Guardar el perfil en la base de datos
        $perfilMascota->save();
        // dd($perfilMascota);

        // Si se creo el perfil retorne la vista del perfil, si no muestre la vista home 
        return $perfilMascota ? view('viewsAdmin/ver', compact('perfilMascota')) : view('home');

    }
}
