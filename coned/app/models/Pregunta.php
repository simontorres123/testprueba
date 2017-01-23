<?php
class Pregunta extends Eloquent {
	protected $table      = 'preguntas';
	protected $fillable   = array('nombre','rasgos_id');
	/*public 	  $timestamps = true;  para la ultima vez que se logean   */
	public function Rasgo(){
		return $this -> hasMany('Rasgo','rasgos_id');
	}
}