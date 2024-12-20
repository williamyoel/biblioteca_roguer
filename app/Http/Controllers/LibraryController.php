<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        // Ejemplo de libros, ajusta según tu lógica
        $libros = [
            (object)['titulo' => 'Libro 1', 'resumen' => 'Resumen del libro 1', 'portada' => 'libro1.jpg'],
            (object)['titulo' => 'Libro 2', 'resumen' => 'Resumen del libro 2', 'portada' => 'libro2.jpg'],
        ];

        return view('biblioteca_index', compact('libros'));
    }
}
