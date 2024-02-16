<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    // Aplicación del middleware para la autenticación de usuarios.
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  Obtiene todas las tareas de la base de datos y las devuelve en formato JSON.
     */
    public function index()
    {
        $tareas = Tarea::all();
        return response()->json($tareas);
    }

    /**
     *  una nueva tarea.
     */
    public function create()
    {
        
    }

    /**
     * Almacena la nueva tarea en la base de datos.
     */
    public function store(Request $request)
    {
        $tarea = Tarea::create($request->all());
        $tarea->message = 'Tarea creada correctamente';
        return response()->json($tarea, 201); // 201 Created
    }

    /**
     * Obtener una tarea específica por su ID.
     */
    public function show($id)
    {
        $tarea = Tarea::findOrFail($id);
        return response()->json($tarea);
    }

    /**
     *
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->update($request->all());
        $tarea->message = 'Tarea actualizada correctamente';
        return response()->json($tarea, 200);
    }

    /**
     * Elimina una tarea de la base de datos.
     */
    public function destroy($id)
    {
        $tarea = Tarea::findOrFail($id);
        $this->delete($tarea);
        $message = 'Tarea eliminada correctamente';
        return response()->json($message, 204);
    }
}
