<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RecomendacionesDocumentoController;

// Página principal (login)
Route::get('/', [AuthController::class, 'showLogin'])->name('home');

// Autenticación
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Rutas protegidas
Route::middleware(['auth'])->group(function () {
    // Usuario
    Route::middleware('auth')->group(function () {
        Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');
    });
    

    // Biblioteca
    Route::get('/biblioteca', [LibraryController::class, 'index'])->name('biblioteca.index');

    // Soporte y ayuda
    Route::get('/soporte', [HelpController::class, 'index'])->name('soporte.index');

    // Sugerencias
    Route::get('/sugerencias', [SuggestionController::class, 'index'])->name('sugerencias.index');

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