<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    //
    protected $fillable = ['modelo', 'placa', 'marca', 'ano', 'ocupantes','tipoVeiculo_id','combustivel_id','pneu_id','status','km_inicial','km_final'];

public function veiculo_abastecimentos(){

        return $this->hasMany('App\Abastecimento');

}

public static function pegaVeiculos(){
    $veiculo = Veiculo::all();
    if($veiculo->count()){
        $modelos=[];
        foreach ($veiculo as $key => $valor) {
         //$formata_modelo = str_split($valor);
            $modelos[] ="'".$valor['modelo']."'";


        }
       return $modelos;
    }else{
        return null;
    }



    return $veiculo;
}

}

