<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reseña;
use Illuminate\Container\Attributes\Auth;


class ReseñaController extends Controller
{
    public function store(Request $request)
    {
        // Validación de la reseña
        $request->validate([
            'idBasedato' => 'required|exists:basededatos,idbasedatos',
            'reseña' => 'required|string',
        ]);

        // Crear una nueva reseña
        $reseña = new Reseña();
        $reseña->idrecomendaciondatabase = $request->idBasedato;
        $reseña->idusuario = 1; // Asignar el id del usuario autenticado
        $reseña->reseña = $request->reseña;

        // Guardar la reseña
        $reseña->save();

        return response()->json(['success' => true, 'message' => 'Reseña añadida correctamente.']);
    }
}
