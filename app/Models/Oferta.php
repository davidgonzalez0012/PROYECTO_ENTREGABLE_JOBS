<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = ['empleador_id', 'titulo', 'descripcion', 'salario', 'ubicacion', 'estado'];

    public function empleador()
    {
        return $this->belongsTo(Empleador::class);
    }

    public function postulaciones()
    {
        return $this->hasMany(Postulacion::class);
    }
}
