<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $fillable = ['remitente_id', 'destinatario_id', 'contenido'];

    public function remitente()
    {
        return $this->belongsTo(Usuario::class, 'remitente_id');
    }

    public function destinatario()
    {
        return $this->belongsTo(Usuario::class, 'destinatario_id');
    }
}
