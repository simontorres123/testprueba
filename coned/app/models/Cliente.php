<?php
class Cliente extends Eloquent {
	protected $table      = 'clientes';
	protected $fillable   = array('nombre','apellido_paterno','apellido_materno', 'empresa','emails','telefono');
	/*public 	  $timestamps = true;  para la ultima vez que se logean   */
}