<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'Kaggle', 'description' => 'Conjuntos de datos públicos', 'link' => 'https://www.kaggle.com'],
            ['name' => 'Datos Abiertos Perú', 'description' => 'Datos del gobierno de Perú', 'link' => 'https://www.datosabiertos.gob.pe'],
        ];

        return view('datos_abiertos_index', ['data' => $data]);
    }
}
