<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function create (){
        return view('user');
    }

    public function store (Request $request){
        $Usuario = new Usuario();
        $Usuario -> nombre = $request-> nombre;
        $Usuario -> email = $request-> email;
        $Usuario -> contraseña = $request-> contraseña;
        $Usuario -> rol = $request-> rol;
        $Usuario -> telefono = $request-> telefono;
        $Usuario -> direccion = $request-> direccion;
        $Usuario ->save();

        return $Usuario;
    }

    public function recuperar_contraseña(Request $request){
        $Usuario = NEW Usuario();
        $Usuario -> email = $request -> email;

        // $request->validate([
        //     'email' => 'required|email',
        // ]);
        // $existe = Usuario::where('email', $request->email)->exists();
    }
}
