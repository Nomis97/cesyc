<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigaciones extends Model
{
    //
 protected $table = 'investigaciones';

  public function user()
    {
        return $this->belongsTo('App\User', 'idUsuario', 'id');
    }

}