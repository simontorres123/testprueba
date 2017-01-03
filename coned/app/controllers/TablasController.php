<?php
//las tablas
	class TablasController extends BaseController{
		public function showClientes(){
				return View::make('tablas.tablaClientes');
		}

		public function accionClientes(){
			switch (Input::get('accion')) {
				case 'consulta':
						return $this->consultaClientes();
					break;
				case 'update':
						$cliente = Cliente::find(Input::get('id'));
						$cliente -> empresa = Input::get('empresa');
						$cliente -> telefono = Input::get('telefono');
						$cliente -> emails = Input::get('emails');
						$cliente -> save();
						return Redirect::back();
					break;
				
				default:
					return Redirect::back();
					break;
			}
		}
		private function consultaClientes(){
			  $consulta = Cliente::select('clientes.empresa as empresa','clientes.telefono','clientes.emails',DB::raw('concat(clientes.nombre," ",clientes.apellido_paterno," ",clientes.apellido_materno)as nombre'))
  					->get();
  			return $consulta;
		}
		//FINALIZA SECCION DEL CLIENTE
	}//cierre de las tablas