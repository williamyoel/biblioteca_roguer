<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario; // Modelo correcto basado en tu estructura

class UserController extends Controller
{
    // Iniciar sesión
    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required|string',
        ]);

        if (Auth::attempt(['correo' => $request->correo, 'password' => $request->contraseña])) {
            return redirect()->route('biblioteca.index'); // Redirige a biblioteca_index
        }

        return back()->withErrors(['correo' => 'Credenciales incorrectas.']);
    }

    // Registrar nuevo usuario
    public function register(Request $request)
    {
        $request->validate([
            'correo' => 'required|email|unique:usuario,correo',
            'contraseña' => 'required|min:6|confirmed',
        ]);

        $user = Usuario::create([
            'correo' => $request->correo,
            'contraseña' => Hash::make($request->contraseña),
        ]);

        Auth::login($user);

        return redirect()->route('biblioteca.index'); // Redirige a biblioteca_index
    }

    // Cerrar sesión
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Sesión cerrada correctamente.');
    }
}
