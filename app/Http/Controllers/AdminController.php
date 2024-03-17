<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Admin::all();
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $usuarios =  new Admin();
            
            $usuarios->nombre = $request->nombre;
            $usuarios->email = $request->email;
            $usuarios->contrasena = $request->contrasena;
            $usuarios->rol = $request->rol;
            
            $usuarios->save();

            return response()->json(['message' => 'Usuario almacenado correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = Admin::find($id);

        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Admin::findOrFail($request->id);

        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->contrasena = $request->contrasena;
        $usuario->rol = $request->rol;
        
        $usuario->save();
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Admin::destroy($id);
        return $usuario;
    }
}