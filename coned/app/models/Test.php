<?php
class Test extends Eloquent {
	protected $table      = 'tests';
	protected $fillable   = array('nombre','preguntas_id','respuestas_id','users_id');
	/*public 	  $timestamps = true;  para la ultima vez que se logean   */
	public function Pregunta (){
		return $this -> hasMany('Pregunta','preguntas_id');
	}
	public function Respuesta(){
		return $this -> hasMany('respuestas','respuestas_id');
	}
	public function User(){
		return $this -> hasMany('users','users_id');
	}
}