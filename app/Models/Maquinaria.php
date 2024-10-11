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
        'ubicacion_actual',
        'horas_uso',
        'operador_id',
    ];

    protected $casts = [
        'precio_por_hora' => 'decimal:2',
        'horas_uso' => 'integer',
    ];

    public function operador()
    {
        return $this->belongsTo(Operador::class, 'operador_id');
    }

    public function componentes()
{
    return $this->hasMany(Componente::class, 'maquinaria_id');
}
}

