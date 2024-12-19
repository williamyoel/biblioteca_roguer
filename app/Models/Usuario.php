<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Especificar el nombre de la tabla
    protected $table = 'usuario';

    // Especificar la clave primaria
    protected $primaryKey = 'idusuario';

    // Atributos que son asignables masivamente
    protected $fillable = [
        'correo',
        'contraseña',
        'creado_en',
    ];

    // Desactivar el uso de timestamps si no los necesitas
    public $timestamps = false;
}
