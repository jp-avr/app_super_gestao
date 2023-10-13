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
            'site_contato_nome' => ['required', 'string', 'max:255'],
            'site_contato_email' => ['required', 'email', 'max:255' ],
            'site_contato_telefone' => ['required', 'string', 'max:255'],
            'motivo_contato_id' => ['required', 'integer'],
            'site_contato_mensagem' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'site_contato_nome.string' => 'O campo Nome é inválido',
            'site_contato_nome.required' => 'O campo Nome é obrigatório',

            'site_contato_email.email' => 'O campo E-mail é inválido',
            'site_contato_email.required' => 'O campo E-mail é obrigatório',

            'site_contato_telefone.string' => 'O campo Telefone é inválido',
            'site_contato_telefone.required' => 'O campo Telefone é obrigatório',

            'motivo_contato_id.required' => 'O campo Motivo de Contato é obrigatório',
            'motivo_contato_id.integer' => 'O campo Motivo de Contato é inválido',

            'site_contato_mensagem.required' => 'O campo Mensagem é obrigatório',
            'site_contato_mensagem.string' => 'O campo Mensagem é inválido',
        ];
    }
}
