<?php


Route::get('/', function()
{
	return View::make('index.index');
});
Route::get('/a', function()
{
  
  $consulta = Rasgo::join('preguntas as p','p.rasgos_id','=','rasgos.id')
  ->select('p.nombre as nombre','rasgos.nombre as rasgo')

  //$consulta = Clave::select('claves.id','claves.clave')
        ->get();

  return $consulta;

});



Route::post('/validaLogin', function () {
    $request = array(
        'emails' => Input::get('emails'),
        'password' => Input::get('password'),
    );
    //$request=Input::all(); 
    //wea del logeo
    if (Auth::attempt($request)) {
        if (Auth::user()->active !=0) {
              if (Auth::user()->nivel == 'admin') {
                    return View::make('admin.ClientesPreguntas');
                }

            //return Redirect::back()->with('error','Usuario no autentificado');
           // $user = $this->user->find(Auth::id());
  //  return View::make('auth.editUser')->with('user', $user);
          //  return View::make('base.baseCliente')->with('user', $user);
                return Redirect::to('/');

        }
        else {
              // return Input::all()->with('hi2');
              return Redirect::to('/');
            }
    }   
   // return Input::all();
      return Redirect::to('/');
});
Route::post('/validaClave', function () {
    $request = array(
        'clave' => Input::get('clave'),
    );
     if ($consulta::attempt($request)) {
        if (Clave::claves()->clave =='clave') {

            //return Redirect::back()->with('error','Usuario no autentificado');
           // $user = $this->user->find(Auth::id());
  //  return View::make('auth.editUser')->with('user', $user);
          //  return View::make('base.baseCliente')->with('user', $user);
                return Redirect::to('/');

        }
        else {
             return Input::all()->with('hi2');
              return Redirect::to('/');
            }
    } 
});


Route::get('/admin',function(){
  return View::make('base.baseAdmin');

});


Route::match(array('GET','POST'), '/vRegistro','TestController@vRegistro');
Route::match(array('GET','POST'), '/vPreguntas','TestController@vPreguntas');
Route::match(array('GET','POST'), '/vClientes','TestController@vClientes');
Route::match(array('GET','POST'),'/base/{email}/token/{token}', 'TestController@confirmRegister');

Route::match(array('GET','POST'), '/vEmail','TestController@vEmail');
//seccion de las tablas
Route::get('/inicio/resultados', 'ConsultasController@mostrarResultados');
Route::get('/inicio/resultados', 'ConsultasController@consultaClientes');
Route::post('/inicio/resultados', 'ConsultasController@accionResultados');

  //seccion del cliente
   Route::get('/inicio/cliente', 'TablasController@showClientes');
   Route::post('/inicio/cliente', 'TablasController@accionClientes');

   //preguntas
   Route::get('/inicio/preguntas', 'TablasController@showPreguntas');
   Route::post('/inicio/preguntas', 'TablasController@accionPreguntas');
   

Route::match(array('GET','POST'), '/clienteini', 'TestController@vCliente');
Route::match(array('GET','POST'), '/clienteCuestionario', 'TestController@vCuestionario');

// consulta de resultados por usuario


/////



