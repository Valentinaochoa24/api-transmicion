<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function storeFile(Request $request)
    {
    
        try {
            if (!$request->hasFile('video')) {
                throw new \Exception('No se ha proporcionado ningún archivo de video.');
            }

            $videoFile = $request->file('video');

            // Obtener el nombre original del archivo
            $videoName = $videoFile->getClientOriginalName();

            // Guardar el video en el sistema de archivos utilizando el método putFile
            $videoPath = Storage::disk('public')->putFile('videos', $videoFile);

            // Crear un nuevo objeto Video y guardarlo en la base de datos
            $video = new Video([
                'nombre' => $videoName,
                'descripcion' => $request->descripcion,
                'tamaño' => $videoFile->getSize(),
                'ruta_video' => $videoPath,
            ]);
            $video->save();

            return response()->json(['message' => 'Video almacenado correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function showAllVideos()
    {
        $videos = Video::all();
        return $videos;
    }
    
    public function showVideo($id)
    {
        try {
            // Buscar el video por su ID en la base de datos
            $video = Video::findOrFail($id);

            // Obtener la ruta del video
            $videoPath = Storage::disk('public')->path($video->ruta_video);

            // Devolver el video como respuesta
            return response()->file($videoPath);
        } catch (\Exception $e) {
            return response()->json(['error' => 'El video no pudo ser encontrado'], 404);
        }
    }
}