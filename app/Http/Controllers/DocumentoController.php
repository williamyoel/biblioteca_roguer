<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    // Filtra los artículos (ajusta el criterio de filtro)
    public function filtrarArticulos()
    {
        $articulos = Documento::where('idtipodocumento', 1)->get();  // Suponiendo que el tipo de documento 1 es Artículo
        return response()->json($articulos);
    }

    // Filtra los libros gratuitos (ajusta el criterio de filtro)
    public function filtrarLibrosGratuitos()
    {
        $librosGratuitos = Documento::where('idtipodocumento', 2)->get();  // Suponiendo que tipo 2 es Libro y 'precio' 0 es gratuito
        return response()->json($librosGratuitos);
    }

    // Filtra los libros de paga (ajusta el criterio de filtro)
    public function filtrarLibrosDePaga()
    {
        $librosDePaga = Documento::where('idtipodocumento', 3)->get();  // Libros de paga, con precio mayor a 0
        return response()->json($librosDePaga);
    }
}