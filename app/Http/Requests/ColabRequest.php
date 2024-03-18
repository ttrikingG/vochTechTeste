<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColabRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required|email',
            'unidade_id' => 'required|exists:unidades,id',
            'cargo_id' => 'required|exists:cargos,id'
        ];
    }
}
