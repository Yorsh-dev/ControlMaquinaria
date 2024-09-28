<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaquinasController extends Controller
{
        // Mostrar una lista de máquinas

    public function index()
    {
        // Aquí iría el código para obtener todas las máquinas, por ejemplo:
        // $maquinas = Maquina::all();
        return view('maquinas.index'); // Llama a una vista que liste las máquinas
    }
    // Mostrar el formulario para crear una nueva máquina
    public function create()
    {
        return view('maquinas.create'); // Llama a una vista con el formulario de creación
    }
     // Mostrar los detalles de una máquina específica
     public function show($idMaquina)
     {
         // Aquí iría el código para obtener una máquina específica por su id
         // $maquina = Maquina::find($id);
         return view('maquinas.show', compact ('idMaquina')); // Llama a una vista que muestre los detalles de la máquina
     }
}
