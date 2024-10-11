<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'marca',
        'modelo',
        'serie',
        'tipo_combustible',
        'precio_por_hora',
        'estado',
        'ubicacion',
        'horas_uso',
        'operador_id',
    ];

    public function operador()
    {
        return $this->belongsTo(Operador::class, 'operador_id');
    }
}
