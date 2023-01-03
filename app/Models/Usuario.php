<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellidos',
        'documento',
        'documento_tipo',
        'direccion',
        'cp',
        'ciudad',
        'telefono',
        'mail',
    ];
}
