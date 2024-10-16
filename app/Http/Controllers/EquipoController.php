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
    public function index(Request  $request)
    {
        $equipos= \App\Models\Equipo::orderBy('id','DESC')->simplePaginate(10);

        $equipos= \App\Models\Equipo::when($request->nombreEquipo , function ($query, $nombreEquipo) {
            $query->where('nombreEquipo', $nombreEquipo);
        })->when($request->placaBase , function ($query,$placaBase){
            $query->where('placaBase', $placaBase);
        })->when($request->usuarios_id , function ($query,$usuarios_id){
            $query->where('usuarios_id', $usuarios_id);
        })->simplePaginate(10)->withQueryString();

        return view('equipos.index', compact('equipos') )->with('clientes',\App\Models\Usuario::all());
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
           return back()->with(['equipos_mensaje'=>'Error el equipo no se pudo Crear','equipos_clase'=>'alert alert-danger']);
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
          return  back()->with(['equipos_mensaje'=>'Error el equipo no se pudo mostrar','equipos_clase'=>'alert alert-danger']);
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
           return back()->with(['equipos_mensaje'=>'Error el equipo no se pudo Actualizar','equipos_clase'=>'alert alert-danger']);
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
           return back()->with(['equipos_mensaje'=>'Error el equipo no se pudo borrar','equipos_clase'=>'alert alert-danger']);
        }

    }
    public function verEquipo(Equipo $equipo){
        $historico= \App\Models\Historico::where('equipos_id',$equipo->id)->orderBy('id', 'DESC')->get();
        return view('equipos.verEquipo',compact('equipo'))->with('historial',$historico);
    }
    public function descargarQr($id){
        return response()->download('./qrcodes/qr_'.$id.'.png');
    }
}
