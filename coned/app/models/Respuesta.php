<?php
class Respuesta extends Eloquent {
	protected $table      = 'respuestas';
	protected $fillable   = array('nombre','puntuacion');
	/*public 	  $timestamps = true;  para la ultima vez que se logean   */

}