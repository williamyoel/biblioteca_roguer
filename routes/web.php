<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\RecomendacionesDocumentoController;
use App\Http\Controllers\BaseDatosController;
use App\Http\Controllers\DocumentoController;

#para serrar sesion
    // Route::middleware(['auth'])->group(function () {
    //     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // });

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

Route::get('/usuarioupdate', function () {
    return view('usuario_editar_perfil');
})->name('usuario_editar_perfil');
// Ruta para actualizar el perfil
// Route::put('/usuario/actualizar', [UserController::class, 'update'])->name('usuario.update');



//rutas para la base de datos
Route::post('/admin/añadir', [BaseDatosController::class, 'store'])->name('base-datos.store');

#redirecion para soporte y ayuda
Route::get('soporte_ayuda_index', function () {
    return view('soporte_ayuda_index');
});

// Ruta principal para la vista de búsqueda de documentos
Route::get('/libro_articulos', function () {
    return view('vista_documento'); // Asegúrate de que 'vista_documento' sea el nombre correcto del archivo blade.php
})->name('libro_articulos');

// Rutas para los documentos
Route::get('/api/articulos', [DocumentoController::class, 'filtrarArticulos']); // Ruta para filtrar artículos
Route::get('/api/libros-gratuitos', [DocumentoController::class, 'filtrarLibrosGratuitos']); // Ruta para libros gratuitos
Route::get('/api/libros-paga', [DocumentoController::class, 'filtrarLibrosDePaga']); // Ruta para libros de paga


//ruta para la vista de sugerencias aportes de documentos
Route::get('/sugerencias_aportes', function () {
    return view('vista_sugierencias_aportes');
})->name('sugerencias_aportes');
Route::get('/api/recomendaciones', [RecomendacionesDocumentoController::class, 'recomendaciones']);
Route::post('/api/recomendaciones', [RecomendacionesDocumentoController::class, 'store']);


//vista inicio
Route::get('/vista_inicio', function () {
    return view('vista_inicio'); // Asegúrate de que 'vista_documento' sea el nombre correcto del archivo blade.php
})->name('vista_inicio');


//rutas para la base de datos
Route::get('/vista_basededatos', function () {
    return view('vista_basededatos'); // Asegúrate de que 'vista_documento' sea el nombre correcto del archivo blade.php
})->name('vista_basededatos');

Route::get('/api/basededatos', [BaseDatosController::class, 'index']);




//admin eliminar
Route::get('/admin_eliminar', function () {
    return view('admin_eliminar'); // Asegúrate de que 'vista_documento' sea el nombre correcto del archivo blade.php
})->name('admin_eliminar');
