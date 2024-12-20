<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\RecomendacionesDocumentoController;
use App\Http\Controllers\BaseDatosController;
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

//recomendaciones
Route::get('recomendacionesdocumento', [RecomendacionesDocumentoController::class, 'index'])->name('vistarecomendaciones');
Route::delete('/recomendaciones/{idrecomendacionesDocumento}', [RecomendacionesDocumentoController::class, 'destroy'])->name('recomendaciones.destroy');


//admin-pestaña 
Route::get('/admin/añadir', function () {
    return view('admin_añadir');
})->name('admin.añadir');


//usuario
Route::get('/usuario', function () {
    return view('usuario_index');
})->name('usuario_index');
// Ruta para ver el perfil del usuario
Route::get('/perfil', [UserController::class, 'profile'])->name('usuario_perfil');




//rutas para la base de datos
Route::post('/admin/añadir', [BaseDatosController::class, 'store'])->name('base-datos.store');