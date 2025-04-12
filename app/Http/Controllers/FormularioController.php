<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class FormularioController extends Controller
{

    public function  iniciopagina()
    {


        return view('inicio');
    }
    public function form()
    {

        return view('inicio_sesion');
    }

    public function buscar()
    {

        return view('empleos');
    }
    public function publicar()
    {

        return view('publicar_empleo');
    }


    public function ingresousuario(Request $request)
    {

        $usuarioregistrado = new Usuario();
        $usuarioregistrado->rol = $request->rol;
        $usuarioregistrado->email = $request->email;
        $usuarioregistrado->contraseña = $request->contraseña;
        $usuarioregistrado->save();

        return $usuarioregistrado;
    }
}
