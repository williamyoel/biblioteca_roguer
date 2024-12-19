<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'correo', // Campo de correo en la tabla
        'contraseña', // Campo de contraseña en la tabla
    ];

    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    // Encriptar la contraseña automáticamente al asignarla
    public function setPasswordAttribute($value)
    {
        $this->attributes['contraseña'] = bcrypt($value);
    }
}
