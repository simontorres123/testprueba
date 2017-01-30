<?php
/**
 * Created by PhpStorm.
 * User: windows
 * Date: 28/01/2017
 * Time: 20:11
 */


class Respuesta extends Eloquent {
    protected $table      = 'respuestas';
    protected $fillable   = array('nombre','puntuacion');
    /*public 	  $timestamps = true;  para la ultima vez que se logean   */
    public function Test (){
        return $this -> hasMany('Test','respuestas_id');
    }
}