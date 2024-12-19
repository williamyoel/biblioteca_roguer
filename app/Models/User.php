<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'idusuario';

    protected $fillable = [
        'nombre',
        'correo',
        'contraseña',
        'rutafoto',
    ];

    public $timestamps = false;
}
