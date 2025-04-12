<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    //
    public function publicar_empleos(Request $request){
        $publicar = new Oferta();
        $publicar -> titulo = $request -> titulo;
        $publicar -> categoria = $request -> categoria;
        $publicar -> contrato = $request -> contrato;
        $publicar -> duracion = $request -> duracion;
        $publicar -> salario = $request -> salario;
        $publicar -> descripcion = $request -> descripcion;
        $publicar -> educacion = $request -> educacion;
        $publicar -> contacto = $request -> contacto;
        $publicar -> ciudad = $request -> ciudad;
        $publicar -> habilidades = $request -> habilidades;
        $publicar -> experiencia = $request -> experiencia;
        $publicar -> email = $request -> email;
        $publicar -> modalidad = $request -> modalidad;

    //

        $publicar -> estado = $request -> estado;
        $publicar -> ubicacion = $request -> ubicacion;


        $publicar->save();
        // return $publicar
    }
}
