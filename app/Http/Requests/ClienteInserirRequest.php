<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteInserirRequest extends FormRequest
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
            'cliente_nome' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'cliente_nome.required' => 'O campo Nome é obrigatório',
        ];
    }
}
