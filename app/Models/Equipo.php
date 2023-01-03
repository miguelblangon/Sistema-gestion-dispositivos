<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreEquipo',
        'procesador',
        'placaBase',
        'discoDuro',
        'sistemaOperativo',
        'tipo',
        'usuarios_id',
    ];

    /**
     * Obtengo el modelo del usuario para mostrar datos.
     */
    public function usuario()
    {
        return $this->hasOne( \App\Models\Usuario::class,'id','usuarios_id' );
    }

}
