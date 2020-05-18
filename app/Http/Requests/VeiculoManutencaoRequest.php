<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class veiculoManutencaoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'veiculo_id'=>'required',
            'kmInicioManutencao'=>'required',
            'kmRetornoManutencao',
            'manutencao_id'=>'required',
            'dataInicioManutencao'=>'required',
            'dataRetornoManutencao',
            'descricao'=>'required',
            'status'=>'required'


        ];
    }
}
