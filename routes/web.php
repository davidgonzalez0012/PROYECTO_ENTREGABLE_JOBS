<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

 
Route::get('/formulario', [FormularioController::class, 'form']);  

Route::post('/formulario_ingreso', [FormularioController::class, 'insercion'])->name('formulario.form');  