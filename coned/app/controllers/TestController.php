<?php

class TestController extends BaseController {
	public function vRegistro(){
			if(Request::method()=="GET") {
				return View::make('admin.ClientesAlta');
			}
			else {				
				$request = Input::all();
				$validator = Validator::make($request, array(
					'username' 		=> 'required|unique:users',
					'emails' 		=> 'required|email|unique:users',
					'password' 		=> 'required|min:6',
					'comprobacion'  => 'required|min:6|same:password'
				));
				if($validator->fails()) {
					return Redirect::back()->with('validaciones', $validator -> messages());
				}
				else {
					$usuario = new User();
					$data['username'] 		=$usuario-> username = $request['username'];
					$data ['emails']  	 	=$usuario-> emails =  $request['emails'];
					$usuario->password   	= Hash::make($request['password']);
					$data['token'] 			= $usuario-> token = str_random(100);
					$usuario->save();
					Mail::send('emails.emailV', ['data' => $data], function($mail) use($data){

						$mail->subject('Confirma tu cuenta');
						$mail->to($data['emails'], $data['username']);
						    return Redirect::back()->with("success", "Correo enviado, favor de verificar");
					    });
					return Redirect::back()->with('success', 'Saatisfaccion');
					}
			}
	}//cierre del vRegistro
	//seccion dle email
	public function confirmRegister($email, $token){
				 $user = new User;
				 $the_user = $user->select()->where('emails', '=', $email)
				   ->where('token', '=', $token)->get();

				 if (count($the_user) > 0){
				  $active = 1;
				  $confirm_token = str_random(100);
				  $user->where('emails', '=', $email)
				  ->update(['active' => $active, 'token' => $token]);

				 return Redirect::to('/')

				  ->with('message', 'Enhorabuena   ya puede iniciar sesión');
				 }
				 else
				 {
					return Redirect::to('/');
				 }
		}//cierre del email

	public function vPreguntas(){
			if(Request::method()=="GET") {
				return View::make('admin.ClientesPreguntas');
			}
	}//cierre de vPregunta



	public function vClientes(){
			if(Request::method()=="GET") {
				$estados = Estado::select('estados.id','estados.nombre')
				->get();
				return View::make('admin.ClientesClientes',compact('estados'));
			}
			else {				
				$request = Input::all();
				$validator = Validator::make($request, array(
					'nombre' 			=> 'required',
					'empresa' 			=> 'required',
					'emails' 			=> 'required|email|unique:clientes',
					'telefono' 			=> 'required',
					'apellido_paterno' 	=> 'required',
					'apellido_materno' 	=> 'required'
				));
				if($validator->fails()) {
					return Redirect::back()->with('validaciones', $validator -> messages());
				}
				else {
					$usuario = new Cliente();
					$data ['nombre'] 			=$usuario-> nombre = $request['nombre'];
					$data ['apellido_paterno']  =$usuario-> apellido_paterno =  $request['apellido_paterno'];
					$data ['apellido_materno'] 	=$usuario-> apellido_materno =  $request['apellido_materno'];
					$data ['empresa'] 			=$usuario-> empresa = $request['empresa'];
					$data ['emails']  	 		=$usuario-> emails =  $request['emails'];
					$data ['telefono']  		=$usuario-> telefono =  $request['telefono'];
					$usuario->save();
					return Redirect::back()->with('success', 'Saatisfaccion');
					}
			}
	}//cierre de vClientes
	public function vEmail(){
			if(Request::method()=="GET") {
				return View::make('admin.EjemploEmail');
			}
	}//cierre de vPregunta
	public function vClave(){


	}
	public function vCliente(){
			if(Request::method()=="GET") {
				return View::make('base.baseCliente');
			}
	}//cierre de vCliente

}//cierre del controller