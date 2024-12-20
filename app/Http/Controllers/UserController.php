<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // Asegúrate de usar el modelo correcto
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Container\Attributes\Storage;

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

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'rutafoto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validar la foto (opcional)
        ]);

        $user = Usuario::findOrFail($id);

        $user->nombre = $request->nombre;

        if ($request->hasFile('rutafoto')) {
            if ($user->rutafoto) {
                Storage::delete('public/images/' . $user->rutafoto);
            }

            // Guardar la nueva foto
            $imageName = time() . '.' . $request->rutafoto->extension();
            $request->rutafoto->storeAs('public/images', $imageName);
            $user->rutafoto = $imageName;
        }

        // Guardar los cambios en la base de datos
        $user->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('usuario.profile')->with('success', 'Perfil actualizado correctamente.');
    }

}   