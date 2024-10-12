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

    public function store(Request $request)
{
    // Validar los datos recibidos
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'marca' => 'required|string|max:255',
        'modelo' => 'required|string|max:255',
        'serie' => 'required|string|max:255',
        'tipo_combustible' => 'required|string|max:255',
        'precio_por_hora' => 'required|numeric',
        'estado' => 'required|in:operativa,mantenimiento,fuera_servicio',
        'ubicacion_actual' => 'nullable|string|max:255',
        'horas_uso' => 'nullable|integer',
        'operador_id' => 'nullable|integer|exists:operadores,id', // Asegúrate de que exista el operador
    ]);

    // Crear una nueva máquina
    Maquinaria::create($validatedData);

    // Redirigir a la lista de máquinas con un mensaje de éxito
    return redirect()->route('maquinas.index')->with('success', 'Máquina agregada correctamente.');
    return redirect()->route('maquinas.index')->with('success', 'Máquina eliminada con éxito');

}

     // Mostrar los detalles de una máquina específica
    public function show($id)
    {
            // Obtiene la máquina por ID
    $maquina = Maquinaria::findOrFail($id);

    // Devuelve la vista con la máquina
    return view('maquinas.show', compact('maquina'));
    }

    public function edit($id)
    {
        $maquinaria = Maquinaria::findOrFail($id);
        return view('maquinas.edit', compact('maquinaria'));
    }

    // Eliminar una máquina
    public function destroy($id)
    {
        $maquinaria = Maquinaria::findOrFail($id);
        $maquinaria->delete();

        return redirect()->route('maquinas.index')->with('success', 'Máquina eliminada con éxito');
    }
    public function update(Request $request, $id)
    {
        // Validación de los campos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'serie' => 'required|string|max:255',
            'tipo_combustible' => 'required|string|max:255',
            'precio_por_hora' => 'required|numeric',
            'ubicacion_actual' => 'required|string|max:255',
            'horas_uso' => 'required|numeric',
            'operador_id' => 'required|integer',
            'estado' => 'required|string|in:operativa,mantenimiento,fuera_servicio',
        ]);

        // Encontrar la máquina por ID
        $maquinaria = Maquinaria::findOrFail($id);
        
        // Actualizar los datos
        $maquinaria->update($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('maquinas.index')->with('success', 'Máquina actualizada con éxito.');
    }

}
