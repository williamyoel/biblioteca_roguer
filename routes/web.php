<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RecomendacionesDocumentoController;

// Página principal (redirecciona al login)
Route::get('/', [AuthController::class, 'showLogin'])->name('home');

// Rutas de autenticación
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // Mostrar login
    Route::post('/login', [AuthController::class, 'login']); // Procesar login
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Cerrar sesión
});

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Rutas de usuario
    Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');

    // Biblioteca
    Route::get('/biblioteca', [LibraryController::class, 'index'])->name('biblioteca.index');

    // Soporte y ayuda
    Route::get('/soporte', [HelpController::class, 'index'])->name('soporte.index');

    // Sugerencias
    Route::get('/sugerencias', [SuggestionController::class, 'index'])->name('sugerencias.index');

    // Recomendaciones de documentos
    Route::get('/recomendaciones', [RecomendacionesDocumentoController::class, 'index'])->name('recomendaciones.index');
    Route::delete('/recomendaciones/{id}', [RecomendacionesDocumentoController::class, 'destroy'])->name('recomendaciones.destroy');
});

// Rutas de registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [UserController::class, 'register']);
