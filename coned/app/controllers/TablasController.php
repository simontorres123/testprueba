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
						$cliente -> nombre = Input::get('nombre');
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
			  $consulta = Cliente::select('clientes.id as id ','clientes.empresa as empresa','clientes.telefono','clientes.emails',DB::raw('concat(clientes.nombre," ",clientes.apellido_paterno," ",clientes.apellido_materno)as nombre'))
  					->get();
  			return $consulta;
		}
		//FINALIZA SECCION DEL CLIENTE
		public function showPreguntas(){
				return View::make('tablas.tablaPregunta');
		}

		public function accionPreguntas(){
			switch (Input::get('accion')) {
				case 'consulta':
						return $this->consultaPreguntas();
					break;
				case 'update':
						
						$request = Input::all();
						$pregunta = Pregunta::find(Input::get('id'));
						
						$pregunta -> nombre = Input::get('nombre');
		
						$pregunta -> save();

						return Redirect::back();
					break;
				
				default:
					return Redirect::back();
					break;
			}
		}
		private function consultaPreguntas(){
			  $consulta = Rasgo::join('preguntas as p','p.rasgos_id','=','rasgos.id')
  			 ->select('p.id as id','p.nombre as nombre','rasgos.nombre as rasgo')
  					->get();
  			return $consulta;
		}
		//FINALIZA SECCION DEL PREGUNTAS
	}//cierre de las tablas