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
        $mascota = new Mascota();

        $mascota->nombre = $request->nombre;
        $mascota->raza_id = $request->raza_id;
        $mascota->categoria_id = $request->categoria_id;
        $mascota->photo = $request->photo;
        $mascota->genero_id = $request->genero_id;

        // Guardar el perfil en la base de datos
        $mascota->save();
        // dd($perfilMascota);

        return view('viewsAdmin/ver', compact('mascota'));
    }

    public function editar(Request $request, $id){
        
        $mascota = Mascota::find($id);

        /*VALIDO LOS DATOS DEL FORMULARIO */

        $request->validate([

            'nombre'=>	'required|string|max:50',
            'raza_id' => 'required',
            'categoria_id' => 'required',
            'photo' => 'required',
            'genero_id'	=> 'required',
            
        ]);

        /*PARA CREAR UN NUEVO PERFIL Y ASIGNAR LOS DATOS: */
        $mascota->nombre = $request->nombre;
        $mascota->raza_id = $request->raza_id;
        $mascota->categoria_id = $request->categoria_id;
        $mascota->photo = $request->photo;
        $mascota->genero_id = $request->genero_id;

        // Guardar el perfil en la base de datos
        $mascota->save();
        // dd($mascota);

        
        return view('viewsAdmin/ver', compact('mascota'));

        // return $id ;

    }
}
