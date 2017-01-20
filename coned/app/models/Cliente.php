<?php
class Cliente extends Eloquent {
	protected $table      = 'clientes';
	protected $fillable   = array('nombre','apellido_paterno','apellido_materno', 'empresa','emails','telefono','estados_id');
	/*public 	  $timestamps = true;  para la ultima vez que se logean   */
	public function estados (){
		return $this -> hasMany('Estado','id');
	}
}