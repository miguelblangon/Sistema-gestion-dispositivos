<?php

namespace App\Http\Controllers;
use App\Models\Historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function index(Request $request){
        $historico= Historico::orderBy('id', 'DESC')->simplePaginate(10);
        return view('historico.index',compact('historico'));
    }



    //esta es la vista con equipo con tarjet
    public function createDos(\App\Models\Equipo $equipo){
        $historial= Historico::where('equipos_id',$equipo->id)->orderBy('id', 'DESC')->take(3)->get();
        return view('historico.crear',compact('equipo'))->with('historial', $historial);
    }
    //vista sin equipo tarjet
    public function create(){
        $equipos=\App\Models\Equipo::all();
        return view('historico.crearSinTarjet',compact('equipos'));
    }
    public function store(Request $request){
        try {
            $historico= Historico::create($request->all());
            return back()->with(['equipos_mensaje'=>'Incidencia Creada Correctamente','equipos_clase'=>'alert alert-success']);
        } catch (\Exception $e) {
           return back()->with(['equipos_mensaje'=>'Error, No se pudo crear la incidencia' ,'equipos_clase'=>'alert alert-danger']);
        }
    }
    public function edit(Historico $historico)
    {

        try {
            $equipos=\App\Models\Equipo::all();
            return view('historico.crearSinTarjet')->with(['envioEspecial'=>'PUT', 'historico'=>$historico,'equipos'=>$equipos]);
        } catch (\Exception $e) {
          return  back()->with(['equipos_mensaje'=>'Error, la incidencia no se pudo mostrar','equipos_clase'=>'alert alert-danger']);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historico $historico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historico $historico)
    {
        try {
            $historico->update($request->all());
            return back()->with(['equipos_mensaje'=>'Incidencia Actualizada Correctamente','equipos_clase'=>'alert alert-success']);
        } catch (\Exception $e) {
           return back()->with(['equipos_mensaje'=>'Error, la incidencia no se pudo Actualizar','equipos_clase'=>'alert alert-danger']);
        }
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historico $historico)
    {
        try {
            $historico->delete();
            return back()->with(['equipos_mensaje'=>'Incidencia Eliminada Correctamente','equipos_clase'=>'alert alert-success']);
        } catch (\Exception $e) {
           return back()->with(['equipos_mensaje'=>'Error, La incidencia no se pudo borrar','equipos_clase'=>'alert alert-danger']);
        }

    }
}
