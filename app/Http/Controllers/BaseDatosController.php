<?php

namespace App\Http\Controllers;

use App\Models\BaseDatos;
use Illuminate\Http\Request;

class BaseDatosController extends Controller
{
    // Crear un nuevo registro
    public function store(Request $request)
    {
        // Validación de datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'enlace' => 'required|url',
        ]);
    
        // Crear un nuevo registro con 'estado' como 'activo' y 'creado_en' como la fecha actual
        BaseDatos::create([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'],
            'enlace' => $validated['enlace'],
            'estado' => 'activo',  // Valor por defecto
            'creado_en' => now(),  // Fecha y hora actual
        ]);
    
        return redirect()->route('admin.añadir')->with('success', 'Elemento añadido correctamente');
    }
}
