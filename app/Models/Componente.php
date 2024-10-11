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

    public function maquinaria()
    {
        return $this->belongsTo(Maquinaria::class, 'maquinaria_id');
    }
    
}
