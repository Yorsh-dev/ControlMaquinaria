<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'estado',
    ];

    public function maquinarias()
    {
        return $this->hasMany(Maquinaria::class, 'operador_id');
    }
}
