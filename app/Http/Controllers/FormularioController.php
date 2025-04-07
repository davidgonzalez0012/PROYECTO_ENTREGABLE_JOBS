<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class FormularioController extends Controller
{
    public function form(){

        return view('datos');
    }


    public function insercion(Request $request){

$usuario = new Usuario();  
$usuario->nombre = $request->nombre;  
$usuario->email = $request->email;  
$usuario->contraseña = Hash::make($request->contraseña); 
$usuario->rol = $request->rol;  
$usuario->telefono = $request->telefono;  
$usuario->direccion = $request->direccion;  
$usuario->verificacion_email = null;
$usuario->save(); 
 
return redirect()->route('formulario.form')->with('success', 'Usuario creado exitosamente.');  


 $validator = Validator::make($request->all(), [  
    'nombre' => 'required|string|max:255',  
    'email' => 'required|email|unique:usuarios,email',  
    'contraseña' => 'required|string|min:6|confirmed',  
    'rol' => 'required|in:empleador,trabajador',  
    'telefono' => 'nullable|string|max:15',  
    'direccion' => 'nullable|string|max:255',  
]);  

 
if ($validator->fails()) {  
    return redirect()->back()  
        ->withErrors($validator)  
        ->withInput();  
}  






    }
}
