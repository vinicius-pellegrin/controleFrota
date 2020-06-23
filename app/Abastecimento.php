<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abastecimento extends Model
{
    //
    protected $fillable = ['dataAbastecimento','numeroCupom','kilometragem','veiculo_id','valor','litros'];
}

