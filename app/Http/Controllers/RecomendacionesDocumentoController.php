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
