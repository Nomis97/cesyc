<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\TipoUsuario;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    protected $date = ['delete_at'];
    

        public function educacion()
      {
        return $this->hasMany('App\Educacion', 'idUsuario', 'id');
      }

     public function comentarios()
      {
        return $this->hasMany('App\coment','idusu', 'id');
      }

        public function publicaciones()
      {
        return $this->hasMany('App\Publicaciones', 'idUsuario', 'id');
      }


        public function proyectos()
      {
        return $this->hasMany('App\Proyectos', 'idUsuario', 'id');
      }

 public function investigaciones()
      {
        return $this->hasMany('App\Investigaciones', 'idUsuario', 'id');
      }
 public function residuo()
      {
        return $this->hasMany('App\residuo', 'idUsuario', 'id');
      }
     public function pfg()
      {
        return $this->hasOne('App\pfg', 'id', 'pfg');
      }

          public function delnucleo()
      {
        return $this->hasOne('App\Nucleo', 'id', 'nucleo');
      }

          public function lineasn()
      {
        return $this->hasOne('App\Lineas', 'id', 'lineas');
      }
          public function esta()
      {
        return $this->hasOne('App\esta', 'id', 'estadoinv');
      }

      public function scopeBusqueda($query,$nucleo,$dato="")
     {

            if($nucleo==0){ 
            $resultado= $query->where('nombres','like','%'.$dato.'%')
                              ->orWhere('apellidos','like', '%'.$dato.'%')
                               ->orWhere('email','like', '%'.$dato.'%');
            


             }else{
               
               //select * from users where nucleo = $nucleo  and (nombres like %$dato% or apellidos like %$dato%  or email like  %$dato% )
              $resultado= $query->where("nucleo","=",$nucleo)
                                  ->Where(function($q) use ($nucleo,$dato)  {
                                    $q->where('nombres','like','%'.$dato.'%')
                                      ->orWhere('apellidos','like', '%'.$dato.'%')
                                      ->orWhere('email','like', '%'.$dato.'%');       
                                   });

             }
             }    

              public function scopeBusqueda2($query,$lineas,$dato="")
     {


               
               //select * from users where lineas = $lineas  and (nombres like %$dato% or apellidos like %$dato%  or email like  %$dato% )
              $resultado= $query->where("lineas","=",$lineas)
                                  ->Where(function($q) use ($lineas,$dato)  {
                                    $q->where('nombres','like','%'.$dato.'%')
                                      ->orWhere('apellidos','like', '%'.$dato.'%')
                                      ->orWhere('email','like', '%'.$dato.'%');       
                                   });

             
        return  $resultado;
     }
     
    
     
      public function tipo($idtipo)
      {
        $resul=TipoUsuario::find($idtipo);
        if(isset($resul)){
         return $resul->nombre;
        }
        else
        {
          return "sin definir";
        }
        
      }




}
/*public function setPasswordAttribute($valor){
  if (!empty($valor)) {
    $this->attributes['password'] = \Hash::make($valor);
    # code...
  }
}*/
