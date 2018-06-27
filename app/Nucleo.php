<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
     protected $table = 'nucleo';


         public function users()
      {
        return $this->hasMany('App\User', 'nucleo', 'id');
      }
}
