<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInvestigaciones extends Model
{
     protected $table = 'Tipos_inves';

     
         public function users()
      {
        return $this->hasMany('App\User', 'Tipos_inves', 'id');
      }
}
