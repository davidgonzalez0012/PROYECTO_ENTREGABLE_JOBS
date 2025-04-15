<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/pagina_inicio', [FormularioController::class, 'iniciopagina']);
Route::get('/sesion', [FormularioController::class, 'form'])-> name('sesion.form');
Route::get('/buscar_empleo', [FormularioController::class, 'buscar']);
Route::get('/publicar_empleo', [FormularioController::class, 'publicar']);

