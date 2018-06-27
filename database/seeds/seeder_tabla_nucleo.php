<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class seeder_tabla_nucleo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



$var[1]='Manuel Piar';
$var[2]='Jackelyn Rodryguez';
$var[3]='Roraima Meru';
$var[4]='NATIL';
$var[5]='Horacio Ducharm';


       for ($i=1;$i<=5; $i++){
           DB::table('nucleo')->insert([
            'id' => $i,
            'nombre' => $var[$i], 
          ]);

        }


    }

    //composer dump-autoload
    //luego php artisan db:seed --class:seeder_tabla_nucleo



}
