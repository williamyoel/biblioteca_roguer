<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // Asegúrate de usar el modelo correcto
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

        if (!$user || !Hash::check($request->contraseña, $user->contraseña)) {
            return redirect()->back()->withErrors(['correo' => 'Credenciales incorrectas']);
        }

        Auth::login($user);

        return view('usuario_index', compact('user')); 
    }

    // Función para registrar un nuevo usuario
    public function register(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'correo' => 'required|email|unique:usuario,correo', 
            'contraseña' => 'required|string|min:4',
            'confirmar_contraseña' => 'required|string|same:contraseña',
        ]);

        $user = Usuario::create([
            'nombre' => '',
            'correo' => $request->correo,
            'contraseña' => bcrypt($request->contraseña), 
            'rutafoto' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
            'creado_en' => now(),  
        ]);

        Auth::login($user);
        return view('usuario_index', compact('user'));
    }

    // Función para mostrar el perfil del usuario
    public function profile()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->withErrors('Necesitas estar autenticado para ver tu perfil.');
        }

        // return response()->json($user);
        return view('usuario_index', compact('user'));
    }

    // // Función para actualizar el perfil del usuario
    // public function update(Request $request)
    // {
    //     // Obtén el usuario autenticado
    //     $user = Auth::user();
    
    //     if (!$user instanceof Usuario) {
    //         return redirect()->route('login')->withErrors('Necesitas estar autenticado para editar tu perfil.');
    //     }
    
    //     // Valida los datos enviados desde el formulario
    //     $request->validate([
    //         'nombre' => 'required|string|max:255',
    //         'rutafoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto opcional
    //     ]);
    
    //     // Actualiza el nombre del usuario
    //     $user->nombre = $request->input('nombre');
    
    //     // Si se ha subido una nueva foto
    //     if ($request->hasFile('rutafoto')) {
    //         // Elimina la foto anterior si existe
    //         if ($user->rutafoto && Storage::exists($user->rutafoto)) {
    //             Storage::delete($user->rutafoto);
    //         }
    
    //         // Guarda la nueva foto en la carpeta 'images'
    //         $fotoPath = $request->file('rutafoto')->store('images'); // Guarda en 'images' en vez de 'public/fotos_perfil'
    //         $user->rutafoto = $fotoPath; // Guardamos la nueva ruta de la foto
    //     }
    
    //     // Guarda los cambios en la base de datos
    //     $user->save();  // Asegúrate de que $user es una instancia de Usuario
    
    //     // Redirige al perfil con un mensaje de éxito
    //     return redirect()->route('usuario.editar')->with('success', 'Perfil actualizado correctamente.');
    // }
}   