<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    // Mostrar todos los coches
    public function index()
    {
        $coches = Coche::all();  // Recupera todos los coches de la base de datos
        return view('coches.index', compact('coches'));  // Pasa los coches a la vista
    }

    // Mostrar el formulario para crear un coche
    public function create()
    {
        return view('coches.create');
    }

    // Almacenar un nuevo coche
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'año' => 'required|integer',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
        ]);

        Coche::create($request->all());

        return redirect()->route('coches.index')->with('success', 'Coche agregado exitosamente');
    }

    // Mostrar el formulario para editar un coche
    public function edit($id)
    {
        $coche = Coche::find($id); // Busca el coche por ID
        if (!$coche) {
            return redirect()->route('coches.index')->with('error', 'Coche no encontrado');
        }
        return view('coches.edit', compact('coche')); // Pasa el coche a la vista
    }

    // Actualizar un coche existente
    public function update(Request $request, $id)
{
    // Validación de los datos del formulario
    $validated = $request->validate([
        'marca' => 'required|string|max:255',
        'modelo' => 'required|string|max:255',
        'año' => 'required|integer',
        'precio' => 'required|numeric',
        'descripcion' => 'required|string',
    ]);

    // Buscar el coche por su ID
    $coche = Coche::find($id);

    // Verificar si el coche existe
    if (!$coche) {
        return redirect()->route('coches.index')->with('error', 'Coche no encontrado');
    }

    // Actualizar los datos del coche
    $coche->marca = $request->input('marca');
    $coche->modelo = $request->input('modelo');
    $coche->año = $request->input('año');
    $coche->precio = $request->input('precio');
    $coche->descripcion = $request->input('descripcion');

    // Guardar los cambios en la base de datos
    $coche->save();

    // Redirigir con un mensaje de éxito
    return redirect()->route('coches.index')->with('success', 'Coche actualizado con éxito');
}


    // Eliminar un coche
    public function destroy($id)
{
    // Buscar el coche por su ID y eliminarlo
    $coche = Coche::findOrFail($id);
    $coche->delete();

    // Redirigir a la lista de coches con un mensaje
    return redirect()->route('coches.index')->with('success', 'Coche eliminado correctamente');
}
}
