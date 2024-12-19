<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Models\User;

// class AuthController extends Controller
// {
//     // Mostrar formulario de inicio de sesión
//     public function showLogin()
//     {
//         return view('welcome', ['view' => 'login']);
//     }

//     // Procesar inicio de sesión
//     public function login(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email',
//             'password' => 'required|min:6',
//         ]);

//         if (Auth::attempt($request->only('email', 'password'))) {
//             return redirect()->route('home')->with('success', '¡Inicio de sesión exitoso!');
//         }

//         return back()->withErrors(['email' => 'Credenciales incorrectas.']);
//     }

//     // Mostrar formulario de registro
//     public function showRegister()
//     {
//         return view('welcome', ['view' => 'register']);
//     }

//     // Procesar registro de usuario
//     public function register(Request $request)
//     {
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|email|unique:users',
//             'password' => 'required|confirmed|min:6',
//         ]);

//         User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => bcrypt($request->password),
//         ]);

//         return redirect()->route('login')->with('success', '¡Registro exitoso!');
//     }

//     // Cerrar sesión
//     public function logout()
//     {
//         Auth::logout();
//         return redirect()->route('login')->with('success', '¡Sesión cerrada correctamente!');
//     }
// }
