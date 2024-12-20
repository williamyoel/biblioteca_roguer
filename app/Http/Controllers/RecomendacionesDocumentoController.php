<?php

namespace App\Http\Controllers;

use App\Models\RecomendacionesDocumento;
use Illuminate\Http\Request;
use App\Models\Reacciones;

class RecomendacionesDocumentoController extends Controller
{
    // Mostrar todas las recomendaciones
    public function index()
    {
        // Obtiene todas las recomendaciones
        $recomendaciones = RecomendacionesDocumento::all();

        // Retorna la vista y pasa los datos de las recomendaciones
        return view('admin_recomendaciones', compact('recomendaciones'));
    }


    public function recomendaciones()
    {
        $recomendaciones = RecomendacionesDocumento::all();

        return response()->json($recomendaciones);
    }

    public function store(Request $request)
    {

        $request->validate([
            'comentario' => 'required',
            'enlace' => 'nullable|url',
            'picture' => 'nullable|url',
            'estado' => 'required|in:activo,inactivo',
            'descripcion' => 'nullable',
        ]);

        // Crear una nueva recomendación
        $recomendacion = new RecomendacionesDocumento();
        $recomendacion->comentario = $request->comentario;
        $recomendacion->enlace = $request->enlace;
        $recomendacion->picture = $request->picture;
        $recomendacion->estado = $request->estado;
        $recomendacion->descripcion = $request->descripcion;

        // Guardar la recomendación en la base de datos
        $recomendacion->save();

        // Devolver una respuesta en formato JSON
        return response()->json(['success' => true, 'message' => 'Recomendación añadida correctamente.']);
    }

    // Eliminar una recomendación
    public function destroy($idrecomendacionesDocumento)
    {
        // Encuentra la recomendación por el ID y elimínala
        $recomendacion = RecomendacionesDocumento::where('idrecomendacionesDocumento', $idrecomendacionesDocumento)->first();

        if (!$recomendacion) {
            return redirect()->route('vistarecomendaciones')->with('error', 'Recomendación no encontrada.');
        }

        $recomendacion->delete();

        return redirect()->route('vistarecomendaciones')->with('success', 'Recomendación eliminada con éxito.');
    }
}
