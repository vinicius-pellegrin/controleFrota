<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoRequest extends FormRequest
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
			'modelo'=>'required',
			'ano'=>'required',
			'placa'=>'required',
			'marca'=>'required',
			'ocupantes'=>'required',
			'tipoVeiculo_id'=>'required',
			'combustivel_id'=>'required',
			'pneu_id'=>'required',
			'status' => 'required|max:1'
		];
	}
}
