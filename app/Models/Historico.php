<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;
    protected $fillable = [
        'procedimiento',
        'pieza',
        'descripcion',
        'equipos_id',
    ];
    public function equipo()
    {
        return $this->hasOne( \App\Models\Equipo::class,'id','equipos_id' );
    }
}
