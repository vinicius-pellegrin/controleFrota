<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VeiculoManutencao extends Model
{
    //
    protected $fillable = [
    'veiculo_id',
    'manutencao_id',
    'kmInicioManutencao',
    'kmInRetornoManutencao',
    'dataInicioManutencao',
    'dataRetronoManutencao',
    'descricao',
   //'status'

];
public function veiculo(){

    return $this->belongsTo('App\Veiculo');
}
    
}
