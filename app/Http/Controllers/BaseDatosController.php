<?php

namespace App\Http\Controllers;

use App\Models\BaseDatos;
use Illuminate\Http\Request;

class BaseDatosController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $basedatos = BaseDatos::all();
        return response()->json($basedatos);
    }

    // Mostrar un solo registro
    public function show($id)
    {
        $basedato = BaseDatos::find($id);
        if (!$basedato) {
            return response()->json(['message' => 'Base de datos no encontrada'], 404);
        }
        return response()->json($basedato);
    }

    // Crear un nuevo registro
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'enlace' => 'nullable|url',
            'estado' => 'required|boolean',
        ]);

        $basedato = BaseDatos::create($validated);
        return response()->json($basedato, 201);
    }

    // Actualizar un registro existente
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string',
            'enlace' => 'nullable|url',
            'estado' => 'nullable|boolean',
        ]);

        $basedato = BaseDatos::find($id);
        if (!$basedato) {
            return response()->json(['message' => 'Base de datos no encontrada'], 404);
        }

        $basedato->update($validated);
        return response()->json($basedato);
    }

    // Eliminar un registro
    public function destroy($id)
    {
        $basedato = BaseDatos::find($id);
        if (!$basedato) {
            return response()->json(['message' => 'Base de datos no encontrada'], 404);
        }

        $basedato->delete();
        return response()->json(['message' => 'Base de datos eliminada exitosamente']);
    }
}
