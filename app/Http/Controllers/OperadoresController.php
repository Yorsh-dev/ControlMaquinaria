<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperadoresController extends Controller
{
        // Mostrar una lista de Operadores

    public function index()
    {
        // Aquí iría el código para obtener todas los operadores, por ejemplo:
        // $Operador = Operador::all();
        return view('operadores.index'); // Llama a una vista que liste las máquinas
    }
    // Mostrar el formulario para crear una nueva máquina
    public function create()
    {
        return view('operadores.create'); // Llama a una vista con el formulario de creación
    }
     // Mostrar los detalles de una máquina específica
     public function show($idOperador)
     {
         // Aquí iría el código para obtener una máquina específica por su id
         // $maquina = Maquina::find($id);
         return view('operadores.show', compact ('idOperador')); // Llama a una vista que muestre los detalles de la máquina
     }
}