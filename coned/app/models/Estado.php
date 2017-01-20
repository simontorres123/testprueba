<?php
class Estado extends Eloquent {
	protected $table      = 'estados';
	protected $fillable   = array('nombre');
	/*public 	  $timestamps = true;  para la ultima vez que se logean   */
	public function cliente (){
		return $this -> hasMany('Cliente','estados_id');
	}
}