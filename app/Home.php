<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    //buscar os dados no banco

    public static function pegaVeiculos(){
        $veiculo = Veiculo::all();
        return $veiculo;
    }
}




