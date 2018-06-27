<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class residuo extends Model
{
    //
 protected $table = 'residuo';

  public function user()
    {
        return $this->belongsTo('App\User', 'idUsuario', 'id');
    }

}