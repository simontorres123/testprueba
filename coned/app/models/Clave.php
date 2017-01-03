<?php
class Clave extends Eloquent {
	protected $table      = 'claves';
	protected $fillable   = array('clave');
	//use SoftDeletingTrait;
	/*public 	  $timestamps = true;  para la ultima vez que se logean   */
}