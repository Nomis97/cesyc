<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    //
 protected $table = 'publicaciones';

  public function user()
    {
        return $this->belongsTo('App\User', 'idUsuario', 'id');
    }

}