<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Streams;

class StreamsController extends Controller
{
    // Función para crear una nueva transmisión
    public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'user_id' => 'required|exists:admins,id',
        ]);

        
        $stream = Streams::create($request->all());

        return response()->json(['message' => 'Transmisión creada con éxito', 'data' => $stream], 201);
    }

    // Función para obtener información sobre las transmisiones existentes
    public function index()
    {
        $streams = Streams::all();

        return response()->json(['data' => $streams], 200);
    }

    // Función para obtener detalles de una transmisión específica
    public function show($id)
    {
        $stream = Streams::findOrFail($id);

        return response()->json(['data' => $stream], 200);
    }

    // Función para iniciar una transmisión
    public function start($id)
    {
        $stream = Streams::findOrFail($id);
        $stream->estado = 'activo';
        $stream->save();

        return response()->json(['message' => 'Transmisión iniciada con éxito', 'data' => $stream], 200);
    }

    // Función para detener una transmisión
    public function stop($id)
    {
        $stream = Streams::findOrFail($id);
        $stream->estado = 'inactivo';
        $stream->save();

        return response()->json(['message' => 'Transmisión detenida con éxito', 'data' => $stream], 200);
    }

    // test stream

    public function showView()
    {
        // Obtener todas las transmisiones existentes
        $streams = Streams::all();

        // Devolver la vista 'streams.blade.php' con las transmisiones
        return view('streams', ['streams' => $streams]);
    }
}