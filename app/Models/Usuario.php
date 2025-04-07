<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'contraseña', 'rol', 'telefono', 'direccion'];

    protected $hidden = ['contraseña'];

    public function empleador()
    {
        return $this->hasOne(Empleador::class);
    }

    public function trabajador()
    {
        return $this->hasOne(Trabajador::class);
    }

    public function admin()
    {
        return $this->hasOne(Administrador::class);
    }

    public function mensajesEnviados()
    {
        return $this->hasMany(Mensaje::class, 'remitente_id');
    }
    public function mensajesRecibidos()
    {
        return $this->hasMany(Mensaje::class, 'destinatario_id');
    }
   
    }


