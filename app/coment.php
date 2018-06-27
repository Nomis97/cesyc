<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
     protected $table = 'comentarios';


         public function user()
      {
        return $this->belongsTo('App\User','idusu', 'id');
      }
}
