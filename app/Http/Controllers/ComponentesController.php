<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use Illuminate\Http\Request;

class ComponentesController extends Controller
{
        // Mostrar una lista de máquinas

    public function index()
    {
        $componentes = Componente::all();

        // Retornar la vista con la variable $operadores
        return view('componentes.index', compact('componentes')); // Llama a una vista que liste las máquinas
    }
    // Mostrar el formulario para crear una nueva máquina
    public function create()
    {
        return view('componentes.create'); // Llama a una vista con el formulario de creación
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|unique:componentes,nombre',
            'tiempo_de_vida' => 'required|integer',
            'estado' => 'required|in:funcionando,mantenimiento,fuera_de_servicio',
            'maquinaria_id' => 'required|exists:maquinarias,id',
            'fecha_instalacion' => 'required|date',
            'observaciones' => 'nullable|string',
        ]);

        // Creación del nuevo componente
        Componente::create($validatedData);

        // Redirigir a una página después de guardar, por ejemplo, al índice de componentes
        return redirect()->route('componentes.index')->with('success', 'Componente creado exitosamente.');
    }
     // Mostrar los detalles de una máquina específica
     public function show($id)
     {
                 // Obtiene la máquina por ID
        $componente = Componente::findOrFail($id);

        // Devuelve la vista con la máquina
        return view('componentes.show', compact('componente')); // Llama a una vista que muestre los detalles de la máquina
     }

     public function edit($id)
     {
         // Busca el componente por su ID
         $componente = Componente::findOrFail($id);
     
         // Retorna la vista de edición con el componente
         return view('componentes.edit', compact('componente'));
     }

     public function destroy($id)
     {
         $componente = Componente::findOrFail($id);
         $componente->delete();
     
         return redirect()->route('componentes.index')->with('success', 'Componente eliminado exitosamente.');
     }
}