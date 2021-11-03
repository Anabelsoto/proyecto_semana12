<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita_detalle;

class VueCDController extends Controller
{
    //
    public function __construct()
    {
        //$this->clienteRepository = $clienteRepo;
    }

    public function index(Request $request)
    {
        /*//$clientes = $this->clienteRepository->all();
        $mensajeeloquent="Hola esta funcionando";
        return view('vuecita_detalle.index',compact( 'mensajeeloquent')) ;*/
        if($request->ajax()){
            return Cita_detalle::where('user_id', auth()->id())->get();
        }else{
            return view('vuecita_detalle/index');
        }
    }

    public function lista(Request $request)
    {
        $cita_detalle = Cita_detalle::all();
        return $cita_detalle;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        $cita_detalle = new Cita_detalle();
        $cita_detalle->id_cita = $request->id_cita;
        $cita_detalle->save();
        //Esta función guardará las tareas que enviaremos mediante vuejs
    }
    public function show(Request $request)
    {
        $cita_detalle = Cita_detalle::findOrFail($request->idcita_detalle);
        return $cita_detalle;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $cita_detalle = Cita_detalle::findOrFail($request->idcita_detalle);

        $cita_detalle->id_cita = $request->id_cita;

        $cita_detalle->save();

        return $cita_detalle;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }

    public function destroy(Request $request)
    {
        $cita_detalle = Cita_detalle::destroy($request->idcita_detalle);
        return $cita_detalle;
        //Esta función obtendra el idcliente de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }

}
