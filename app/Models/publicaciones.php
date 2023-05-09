<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class publicaciones extends Model
{
    protected $table 		= 'publicaciones';
    //

    public function comentarioPublicacion(){
    	return $this->hasMany('App\models\comentariosPublicaciones' , 'publicacion_id');
    }

    
}