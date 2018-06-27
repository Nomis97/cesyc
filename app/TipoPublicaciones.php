<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPublicaciones extends Model
{
     protected $table = 'tipos_publicaciones';

     
         public function users()
      {
        return $this->hasMany('App\User', 'tipos_publicaciones', 'id');
      }
}
