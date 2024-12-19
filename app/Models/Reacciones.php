<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reacciones extends Model
{
    use HasFactory;

    protected $table = 'reacciones';
    protected $primaryKey = 'idreacciones';

    protected $fillable = [
        'idrecomendaciondocumento',
        'cantidadlikes',
    ];

    public $timestamps = false;

    public function recomendacionDocumento()
    {
        return $this->belongsTo(RecomendacionesDocumento::class, 'idrecomendaciondocumento');
    }
}
