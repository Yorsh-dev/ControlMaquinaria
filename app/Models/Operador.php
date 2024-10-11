<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    use HasFactory;
    protected $table = 'operadores';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'estado',
    ];

    protected $casts = [
        'estado' => 'string',
    ];

    public function maquinarias()
    {
        return $this->hasMany(Maquinaria::class, 'operador_id');
    }
}
