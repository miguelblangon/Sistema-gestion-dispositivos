<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use App\Models\Usuario;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos= \App\Models\Equipo::simplePaginate(10);
        return view('equipos.index', compact('equipos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=Usuario::all();
        return view('equipos.crear',compact('usuarios'));
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
            $equipo=Equipo::create($request->all());
            return back()->with(['equipos_mensaje'=>'Equipo Creado Correctamente','equipos_clase'=>'alert alert-success']);
        } catch (\Exception $e) {
            back()->with(['equipos_mensaje'=>'Error el equipo no se pudo Crear','equipos_clase'=>'alert alert-danger']);
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
    public function edit(Equipo $equipo)
    {

        try {
            $usuarios=Usuario::all();
            $rutaQr='qrcodes/qr_'.$equipo->id.'.png';
            if (!file_exists('../public/qrcodes/qr_'.$equipo->id.'.png')){
                    QrCode::format('png')->size('200')->generate(route('ver-equipo',$equipo->id),  '../public/qrcodes/qr_'.$equipo->id.'.png');
            }
            return view('equipos.crear')->with(['envioEspecial'=>'PUT', 'equipo'=>$equipo,'usuarios'=>$usuarios,'rutaQr'=> $rutaQr ]);

        } catch (\Exception $e) {
            back()->with(['equipos_mensaje'=>'Error el equipo no se pudo mostrar','equipos_clase'=>'alert alert-danger']);
        }






    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        try {
            $equipo->update($request->all());
            return back()->with(['equipos_mensaje'=>'Equipo Actualizado Correctamente','equipos_clase'=>'alert alert-success']);
        } catch (\Exception $e) {
            back()->with(['equipos_mensaje'=>'Error el equipo no se pudo Actualizar','equipos_clase'=>'alert alert-danger']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        try {
            $equipo->delete();
            return back()->with(['equipos_mensaje'=>'Equipo Eliminado Correctamente','equipos_clase'=>'alert alert-success']);
        } catch (\Exception $e) {
            back()->with(['equipos_mensaje'=>'Error el equipo no se pudo borrar','equipos_clase'=>'alert alert-danger']);
        }

    }

    public function verEquipo($id){
        $equipo= Equipo::findOrFail($id);
        return view('equipos.verEquipo',compact('equipo'));
    }
    public function descargarQr($id){
        return response()->download('./qrcodes/qr_'.$id.'.png');
    }
}
