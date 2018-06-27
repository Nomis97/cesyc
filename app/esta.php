<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class esta extends Model
{
     protected $table = 'estadoinv';


         public function users()
      {
        return $this->hasMany('App\User', 'estadoinv', 'id');
      }
}
