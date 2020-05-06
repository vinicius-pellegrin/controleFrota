<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PneuRequest extends FormRequest
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
            'largura'=>'required|numeric',
            'altura'=>'required|numeric',
            'roda'=> 'required|numeric',
            'Marca'=>'requred'
            //
        ];
    }
}
