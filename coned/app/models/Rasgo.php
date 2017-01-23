<?php
class Rasgo extends Eloquent {
	protected $table      = 'rasgos';
	protected $fillable   = array('nombre');
	/*public 	  $timestamps = true;  para la ultima vez que se logean   */
	public function Pregunta (){
		return $this -> hasMany('Pregunta','rasgos_id');
	}
}