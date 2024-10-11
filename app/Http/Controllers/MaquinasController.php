<?php

namespace App\Http\Controllers;

use App\Models\Maquinaria;
use Illuminate\Http\Request;

class MaquinasController extends Controller
{
        // Mostrar una lista de máquinas

    public function index()
    {
        // Recupera todas las maquinarias de la base de datos
    $maquinarias = Maquinaria::all();
    
    // Retorna la vista y pasa las maquinarias a la vista
    return view('maquinas.index', compact('maquinarias'));
    }
    // Mostrar el formulario para crear una nueva máquina
    public function create()
    {
        return view('maquinas.create'); // Llama a una vista con el formulario de creación
    }
     // Mostrar los detalles de una máquina específica
    public function show($id)
    {
            // Obtiene la máquina por ID
    $maquina = Maquinaria::findOrFail($id);

    // Devuelve la vista con la máquina
    return view('maquinas.show', compact('maquina'));
    }
}
