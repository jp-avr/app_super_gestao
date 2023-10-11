<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInserirRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255' ],
            'celular' => ['required', 'string', 'max:255'],
            'motivo_contato' => ['required', 'integer'],
            'mensagem' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'O campo Nome é inválido',
            'name.required' => 'O campo Nome é obrigatório',

            'email.email' => 'O campo E-mail é inválido',
            'email.required' => 'O campo E-mail é obrigatório',

            'celular.string' => 'O campo Telefone é inválido',
            'celular.required' => 'O campo Telefone é obrigatório',

            'motivo_contato.required' => 'O campo Motivo de Contato é obrigatório',
            'motivo_contato.integer' => 'O campo Motivo de Contato é inválido',

            'mensagem.required' => 'O campo Mensagem é obrigatório',
            'mensagem.string' => 'O campo Mensagem é inválido',
        ];
    }
}
