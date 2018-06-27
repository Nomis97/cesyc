<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pfg extends Model
{
     protected $table = 'pfg';


         public function users()
      {
        return $this->hasMany('App\User', 'pfg', 'id');
      }
}
