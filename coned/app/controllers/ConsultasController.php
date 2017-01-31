<?php
/**
 * Created by PhpStorm.
 * User: windows
 * Date: 28/01/2017
 * Time: 23:24
 */


//las tablas
class ConsultasController extends BaseController{

    public function mostrarResultados(){
        return View::make('resultados.resultados');
    }
    public function accionResultados(){
        switch (Input::get('accion')) {
            case 'consulta':
                return $this->consultaResultados();
                break;
            case 'update':

                return Redirect::back();
                break;

            default:
                return Redirect::back();
                break;
        }
    }
    private function consultaResultados(){


        $id = Auth::user()->id;
        $consulta  = DB::select('call consulta(?)',array($id));


        return $consulta;
    }

    public function consultaClientes(){
        $clientes = Cliente::select('clientes.id as id ',DB::raw('concat(clientes.nombre," ",clientes.apellido_paterno," ",clientes.apellido_materno)as nombre'))
            ->get();


        return View::make('resultados.resultados', compact('clientes'));

    }
}