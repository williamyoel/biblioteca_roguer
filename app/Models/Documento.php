<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documento';
    protected $primaryKey = 'iddocumento';

    protected $fillable = [
        'titulo',
        'autor',
        'resumen',
        'fecha',
        'rutarchivo',
        'enlace',
        'portada',
        'idtipodocumento',
    ];

    public $timestamps = false;

    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class, 'idtipodocumento');
    }
}
