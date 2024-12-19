<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Mostrar el perfil del usuario
    public function index()
    {
        return view('usuario_index');
    }

    // Mostrar formulario de edición del perfil
    public function edit()
    {
        return view('usuario_editar');
    }

    // Procesar la actualización del perfil
    public function update(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        // Actualizar los datos del usuario autenticado
        $user = Auth::user();
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('usuario.index')->with('success', 'Perfil actualizado correctamente.');
    }
}
