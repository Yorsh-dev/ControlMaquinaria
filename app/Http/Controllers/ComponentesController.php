<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentesController extends Controller
{
        // Mostrar una lista de máquinas

    public function index()
    {
        // Aquí iría el código para obtener todas las máquinas, por ejemplo:
        // $maquinas = Maquina::all();
        return view('componentes.index'); // Llama a una vista que liste las máquinas
    }
    // Mostrar el formulario para crear una nueva máquina
    public function create()
    {
        return view('componentes.create'); // Llama a una vista con el formulario de creación
    }
     // Mostrar los detalles de una máquina específica
     public function show($idComponente)
     {
         // Aquí iría el código para obtener una máquina específica por su id
         // $maquina = Maquina::find($id);
         return view('componentes.show', compact ('idComponente')); // Llama a una vista que muestre los detalles de la máquina
     }
}