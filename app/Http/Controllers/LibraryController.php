<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Introducción a la Informática', 'author' => 'Juan Perez', 'image' => 'book1.png'],
            ['title' => 'Informática Básica', 'author' => 'Maria Lopez', 'image' => 'book2.png'],
            ['title' => 'Guía de Inteligencia Artificial', 'author' => 'Jimena Tierra', 'image' => 'book3.png'],
        ];

        return view('biblioteca_index', ['books' => $books]);
    }
}
