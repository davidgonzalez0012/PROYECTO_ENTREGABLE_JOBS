<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'rol'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
