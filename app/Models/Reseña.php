<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    use HasFactory;

    protected $table = 'reseña';
    protected $primaryKey = 'idreseña';

    protected $fillable = [
        'idrecomendaciondatabase',
        'idusuario',
        'reseña',
    ];

    public $timestamps = false;

    public function basedatos()
    {
        return $this->belongsTo(BaseDatos::class, 'idrecomendaciondatabase');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idusuario');
    }
}
