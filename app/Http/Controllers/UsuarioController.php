<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Store a newly created resource in index.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function index(Request  $request)
    {
        $usuarios= \App\Models\Usuario::orderBy('id', 'DESC')->simplePaginate(10);
        $usuarios=\App\Models\Usuario::when($request->nombre , function ($query, $nombre) {
            $query->where('nombre', $nombre);
        })->when($request->apellidos , function ($query,$apellidos){
            $query->where('apellidos', $apellidos);
        })->simplePaginate(10)->withQueryString();
        return view('usuarios.index', compact('usuarios') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $susario=Usuario::create($request->all());
            return back()->with(['usuarios_mensaje'=>'Usuario Creado Correctamente','usuarios_clase'=>'alert alert-success']);
        } catch (\Exception $e) {
            return back()->with(['usuarios_mensaje'=>'Error, El usuario no se pudo Crear','usuarios_clase'=>'alert alert-danger']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.crear')->with(['envioEspecial'=>'PUT', 'usuario'=>$usuario]) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {

        try {
            $usuario->update($request->all());
            return back()->with(['usuarios_mensaje'=>'Usuario Actualizado Correctamente','usuarios_clase'=>'alert alert-success']);

        } catch (\Exception $e) {
            return back()->with(['usuarios_mensaje'=>'Error, El usuario no se pudo actualizar','usuarios_clase'=>'alert alert-danger']);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        try {
            $usuario->delete();
            return back()->with(['usuarios_mensaje'=>'Usuario Eliminado Correctamente','usuarios_clase'=>'alert alert-success']);
        } catch (\Exception $e) {
            return back()->with(['usuarios_mensaje'=>'Error, El usuario no se pudo Eliminar','usuarios_clase'=>'alert alert-danger']);
        }
    }
}
