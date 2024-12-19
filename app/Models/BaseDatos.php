<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseDatos extends Model
{
    use HasFactory;

    protected $table = 'basedatos';
    protected $primaryKey = 'idbasedatos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'enlace',
        'estado',
        'creado_en',
    ];

    public $timestamps = false;

    public function reseñas()
    {
        return $this->hasMany(Reseña::class, 'idrecomendaciondatabase');
    }
}
