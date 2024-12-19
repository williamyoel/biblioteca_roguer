<?php

// namespace App\Http\Controllers;
// use App\Models\BaseDatos;
// use Illuminate\Http\Request;

// class BaseDatosController extends Controller
// {
//     // Muestra todos los registros de la base de datos
//     public function index()
//     {
//         // Obtiene todos los registros
//         $basedatos = BaseDatos::all();

//         // Devuelve la vista 'datosabiertos' con los registros
//         return view('datosAbiertos', ['basedatos' => $basedatos]);
//     }

//     // Muestra el formulario para crear un nuevo registro
//     public function create()
//     {
//         return view('datosabiertos_create');
//     }

//     // Almacena un nuevo registro en la base de datos
//     public function store(Request $request)
//     {
//         // Valida los datos recibidos
//         $request->validate([
//             'nombre' => 'required|string|max:255',
//             'descripcion' => 'nullable|string',
//             'enlace' => 'nullable|url',
//             'estado' => 'required|boolean',
//         ]);

//         // Crea un nuevo registro usando los datos validados
//         BaseDatos::create($request->all());

//         // Redirige a la lista de registros
//         return redirect()->route('basedatos.index')->with('success', 'Base de datos creada exitosamente');
//     }

//     // Muestra el formulario para editar un registro
//     public function edit($id)
//     {
//         // Busca el registro por su ID
//         $basedato = BaseDatos::findOrFail($id);

//         // Devuelve la vista con los datos del registro
//         return view('datosabiertos_edit', ['basedato' => $basedato]);
//     }

//     // Actualiza un registro en la base de datos
//     public function update(Request $request, $id)
//     {
//         // Valida los datos recibidos
//         $request->validate([
//             'nombre' => 'required|string|max:255',
//             'descripcion' => 'nullable|string',
//             'enlace' => 'nullable|url',
//             'estado' => 'required|boolean',
//         ]);

//         // Busca el registro por su ID
//         $basedato = BaseDatos::findOrFail($id);

//         // Actualiza el registro con los nuevos datos
//         $basedato->update($request->all());

//         // Redirige a la lista de registros
//         return redirect()->route('basedatos.index')->with('success', 'Base de datos actualizada exitosamente');
//     }

//     // Elimina un registro de la base de datos
//     public function destroy($id)
//     {
//         // Busca el registro por su ID
//         $basedato = BaseDatos::findOrFail($id);

//         // Elimina el registro
//         $basedato->delete();

//         // Redirige a la lista de registros
//         return redirect()->route('basedatos.index')->with('success', 'Base de datos eliminada exitosamente');
//     }
// }
