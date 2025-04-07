<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $fillable = ['trabajador_id', 'empleador_id', 'calificacion', 'comentario'];

    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }

    public function empleador()
    {
        return $this->belongsTo(Empleador::class);
    }
}
