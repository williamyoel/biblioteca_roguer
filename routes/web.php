<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RecomendacionesDocumentoController;
use App\Http\Controllers\BaseDatosController;

// Página principal (redirecciona al login)
// Route::get('/', [AuthController::class, 'showLogin'])->name('home');

// // Rutas de autenticación
// Route::prefix('auth')->group(function () {
//     Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // Mostrar login
//     Route::post('/login', [AuthController::class, 'login']); // Procesar login
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Cerrar sesión
// });

// // Rutas protegidas por autenticación
// Route::middleware(['auth'])->group(function () {
//     // Rutas de usuario
//     Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');

//     // Biblioteca
//     Route::get('/biblioteca', [LibraryController::class, 'index'])->name('biblioteca.index');

//     // Soporte y ayuda
//     Route::get('/soporte', [HelpController::class, 'index'])->name('soporte.index');

//     // Sugerencias
//     Route::get('/sugerencias', [SuggestionController::class, 'index'])->name('sugerencias.index');

//     // Recomendaciones de documentos
//     Route::get('/recomendaciones', [RecomendacionesDocumentoController::class, 'index'])->name('recomendaciones.index');
//     Route::delete('/recomendaciones/{id}', [RecomendacionesDocumentoController::class, 'destroy'])->name('recomendaciones.destroy');
// });

// Rutas de registro
Route::get('/register', function () {
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



// Route::get('recomendaciones/create', [RecomendacionesDocumentoController::class, 'create'])->name('recomendaciones.create');
    // Route::get('recomendaciones/{id}', [RecomendacionesDocumentoController::class, 'show'])->name('recomendaciones.show');
    // Route::get('recomendaciones/{id}/edit', [RecomendacionesDocumentoController::class, 'edit'])->name('recomendaciones.edit');