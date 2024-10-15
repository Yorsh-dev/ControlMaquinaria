<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tiempo_de_vida',
        'estado',
        'maquinaria_id',
        'fecha_instalacion',
        'observaciones',
    ];

    // Alternativa usando $dates (obsoleto en las versiones más recientes de Laravel)
    protected $casts = [
        'fecha_instalacion' => 'date',
    ];
    

    public function maquinaria()
    {
        return $this->belongsTo(Maquinaria::class, 'maquinaria_id');
    }
}
