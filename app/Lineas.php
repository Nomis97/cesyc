<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineas extends Model
{
     protected $table = 'lineas';


         public function users()
      {
        return $this->hasMany('App\User', 'lineas', 'id');
      }
      
}
