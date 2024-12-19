<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // Asegúrate de usar el modelo correcto
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Función para iniciar sesión (Login)
    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required|string',
        ]);

        // Buscar el usuario por correo
        $user = Usuario::where('correo', $request->correo)->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if (!$user || !Hash::check($request->contraseña, $user->contraseña)) {
            // Devolver mensaje de error a la vista
            return redirect()->back()->withErrors(['correo' => 'Credenciales incorrectas']);
        }

        // Iniciar sesión
        Auth::login($user);

        // Redirigir al usuario a la página principal (por ejemplo)
        return redirect()->route('inicio'); // Cambia la ruta según tu estructura
    }

    // Función para registrar un nuevo usuario
    public function register(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'correo' => 'required|email|unique:usuario,correo', // Asegurarte que se valida contra la tabla 'usuario'
            'contraseña' => 'required|string|min:6',
            'confirmar_contraseña' => 'required|string|same:contraseña',
        ]);

        // Crear un nuevo usuario
        $user = Usuario::create([
            'correo' => $request->correo,
            'contraseña' => bcrypt($request->contraseña), // Encriptar la contraseña
            // 'creado_en' => now(),  // Solo si es necesario y si la columna existe en la tabla
        ]);

        // Iniciar sesión automáticamente después del registro
        Auth::login($user);

        // Redirigir al usuario a la página principal o cualquier otra ruta
        return redirect()->route('inicio'); // Cambia la ruta según tu estructura
    }

    // Función para mostrar la página de inicio
    public function inicio()
    {
        return view('auth.inicio');  // Esta es la vista 'inicio.blade.php'
    }
}