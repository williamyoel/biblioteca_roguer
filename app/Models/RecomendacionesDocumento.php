<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecomendacionesDocumento extends Model
{
    use HasFactory;

    protected $table = 'recomendacionesdocumento';
    protected $primaryKey = 'idrecomendaciondocumento';

    protected $fillable = [
        'comentario',
        'enlace',
        'picture',
        'estado',
        'descripcion',
        'creado_en',
    ];

    public $timestamps = false;

    public function reacciones()
    {
        return $this->hasMany(Reacciones::class, 'idrecomendaciondocumento');
    }
}
