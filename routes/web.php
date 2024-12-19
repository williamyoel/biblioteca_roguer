<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\DataController;


Route::get('/menu', function () {
    return view('menu');
});

Route::get('/usuario', function () {
    return view('usuario');
});

Route::get('/libros', function () {
    return view('libros');
});

// Página principal
// Route::get('/', [AuthController::class, 'showLogin'])->name('home');

// // Autenticación
// Route::prefix('auth')->group(function () {
//     Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
//     Route::post('/login', [AuthController::class, 'login']);
//     Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
//     Route::post('/register', [AuthController::class, 'register']);
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // // Usuario
    // Route::prefix('usuario')->group(function () {
    //     Route::get('/', [UserController::class, 'index'])->name('usuario.index');
    //     Route::get('/perfil', function () {
    //         return view('usuario.index');
    //     })->name('usuario.perfil');
    //     Route::get('/editar', [UserController::class, 'edit'])->name('usuario.editar');
    //     Route::post('/editar', [UserController::class, 'update'])->name('usuario.update');
    // });

    // // Biblioteca
    // Route::get('/libros', [LibraryController::class, 'index'])->name('biblioteca.index');

    // // Soporte y ayuda
    // Route::get('/soporte', [HelpController::class, 'index'])->name('soporte.index');

    // // Sugerencias y aportes
    // Route::get('/sugerencias', [SuggestionController::class, 'index'])->name('sugerencias.index');

    // // Datos abiertos
    // Route::get('/datos', [DataController::class, 'index'])->name('datos.index');


    //########################################################################################################################

    
});


// login
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', [UserController::class, 'login']);

// register
Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('register', [UserController::class, 'register']);

######################################################################################
//ruta de admin 
// Ruta para el inicio
Route::get('/inicio', function() {
    return view('inicio');
})->name('inicio');

// Ruta para el menú de usuario
Route::get('/menu-usuario', function() {
    return view('menu_usuario');
})->name('menu_usuario');

// Ruta para agregar elementos
Route::get('/agregar', function() {
    return view('agregar');
})->name('agregar');

// Ruta para eliminar elementos
Route::get('/eliminar', function() {
    return view('eliminar');
})->name('eliminar');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
################################################################################################