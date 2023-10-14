<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorInserirRequest extends FormRequest
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
            'fornecedor_nome' => ['required', 'string', 'max:255'],
            'fornecedor_email' => ['required', 'email', 'max:255' ],
            'fornecedor_uf' => ['required', 'string', 'max:2','min:2'],
            'fornecedor_site' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'fornecedor_nome.string' => 'O campo Nome é inválido',
            'fornecedor_nome.required' => 'O campo Nome é obrigatório',

            'fornecedor_email.email' => 'O campo E-mail é inválido',
            'fornecedor_email.required' => 'O campo E-mail é obrigatório',

            'fornecedor_uf.string' => 'O campo UF é inválido',
            'fornecedor_uf.required' => 'O campo UF é obrigatório',
            'fornecedor_uf.max' => 'O campo UF não pode ter mais de 2 caracteres',
            'fornecedor_uf.min' => 'O campo UF não pode ter menos de 2 caracteres',

            'fornecedor_site.required' => 'O campo Site é obrigatório',
            'fornecedor_site.string' => 'O campo Site é inválido',
        ];
    }
}
