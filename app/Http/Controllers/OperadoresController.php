<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use Illuminate\Http\Request;

class OperadoresController extends Controller
{
        // Mostrar una lista de Operadores

    public function index()
    {
        $operadores = Operador::all();

        // Retornar la vista con la variable $operadores
        return view('operadores.index', compact('operadores'));
    }
    // Mostrar el formulario para crear una nueva máquina
    public function create()
    {
        return view('operadores.create'); // Llama a una vista con el formulario de creación
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'email' => 'required|email|unique:operadores,email',
            'telefono' => 'nullable|string|max:30',
            'estado' => 'required|in:operativo,fuera_servicio',
        ]);

        // Crear nuevo operador
        Operador::create($request->all());

        // Redirigir a la lista de operadores con un mensaje de éxito
        return redirect()->route('operadores.index')->with('success', 'Operador creado correctamente.');
    }


     // Mostrar los detalles de una máquina específica
    public function show($id)
    {
        $operador = Operador::findOrFail($id);
    
        // Retorna la vista 'operadores.show' y pasa el operador
        return view('operadores.show', compact('operador'));
    }


    public function edit($id)
    {
        // Encuentra el operador por ID
        $operador = Operador::findOrFail($id);
        
        // Retorna la vista de edición con el operador
        return view('operadores.edit', compact('operador'));
    }

    public function destroy($id)
    {
        $operador = Operador::findOrFail($id);
        $operador->delete();

        return redirect()->route('operadores.index')->with('success', 'Operador eliminada con éxito');
    }

    public function update(Request $request, $id)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'email' => 'required|email|unique:operadores,email,' . $id,
            'telefono' => 'nullable|string|max:30',
            'estado' => 'required|in:operativo,fuera_servicio',
        ]);

        // Encuentra el operador por ID
        $operador = Operador::findOrFail($id);

        // Actualiza los campos permitidos
        $operador->nombre = $request->nombre;
        $operador->apellido = $request->apellido;
        $operador->email = $request->email;
        $operador->telefono = $request->telefono;
        $operador->estado = $request->estado;

        // Guarda los cambios
        $operador->save();

        // Redirige a la lista de operadores con un mensaje de éxito
        return redirect()->route('operadores.index')->with('success', 'Operador actualizado correctamente.');
    }

}