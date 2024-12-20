<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Mostrar formulario de inicio de sesión
    public function showLogin()
    {
        return view('auth.login');
    }

    // Procesar inicio de sesión
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('biblioteca.index')->with('success', '¡Inicio de sesión exitoso!');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas.']);
    }

    // Cerrar sesión
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login')->with('success', '¡Sesión cerrada correctamente!');
    }
}
