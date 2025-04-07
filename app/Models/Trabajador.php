<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'habilidades', 'experiencia', 'calificacion'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function postulaciones()
    {
        return $this->hasMany(Postulacion::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }   
}
