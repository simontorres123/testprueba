<?php
/**
 * Created by PhpStorm.
 * User: windows
 * Date: 28/01/2017
 * Time: 17:39
 */
class Tests extends Eloquent {
    protected $table      = 'tests';
    protected $fillable   = array('respuestas_id', 'preguntas_id','users_id');
    public 	  $timestamps = false;

}