<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteContatoInserirRequest extends FormRequest
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
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255' ],
            'telefone' => ['required', 'string', 'max:255'],
            'motivo_contato' => ['required', 'integer'],
            'mensagem' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'nome.string' => 'O campo Nome é inválido',
            'nome.required' => 'O campo Nome é obrigatório',

            'email.email' => 'O campo E-mail é inválido',
            'email.required' => 'O campo E-mail é obrigatório',

            'telefone.string' => 'O campo Telefone é inválido',
            'telefone.required' => 'O campo Telefone é obrigatório',

            'motivo_contato.required' => 'O campo Motivo de Contato é obrigatório',
            'motivo_contato.integer' => 'O campo Motivo de Contato é inválido',

            'mensagem.required' => 'O campo Mensagem é obrigatório',
            'mensagem.string' => 'O campo Mensagem é inválido',
        ];
    }
}
