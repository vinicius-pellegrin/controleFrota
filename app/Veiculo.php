<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    //
    protected $fillable = ['modelo', 'placa', 'marca', 'ano', 'ocupantes','tipoVeiculo_id','combustivel_id','pneu_id','status'];
    

}
