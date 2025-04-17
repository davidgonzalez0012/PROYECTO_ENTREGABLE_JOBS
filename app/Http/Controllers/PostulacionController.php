<?php

namespace App\Http\Controllers;

use App\Models\Postulacion;
use Illuminate\Http\Request;

class PostulacionController extends Controller
{

    public function buscar()
    {
        return view('empleos');
    }
    //
    public function buscar_empleos(Request $request){
        $Postulacion = new Postulacion();
        $Postulacion -> palabra_clave = $request -> palabra;
        $Postulacion -> categoria = $request -> categoria;
        $Postulacion -> ubicacion = $request -> ubiacion;
        $Postulacion -> save();

        // return $Postulacion
    }
}
