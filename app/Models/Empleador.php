<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleador extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'empresa', 'descripcion', 'reputacion'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function ofertas()
    {
        return $this->hasMany(Oferta::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }
}


