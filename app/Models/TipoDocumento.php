<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table = 'tipodocumento';
    protected $primaryKey = 'idtipodocumento';

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function documentos()
    {
        return $this->hasMany(Documento::class, 'idtipodocumento');
    }
}
