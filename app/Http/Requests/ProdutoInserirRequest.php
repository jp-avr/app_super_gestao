<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoInserirRequest extends FormRequest
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
            'fornecedor_id' => ['required','integer'],
            'produto_nome' => ['required', 'string', 'max:255'],
            'produto_descricao' => ['required', 'string', 'max:255' ],
            'produto_peso' => ['required', 'integer'],
            'unidade_id' => ['required', 'integer'],
        ];
    }

    public function messages()
    {
        return [
            'fornecedor_id.required' => 'O campo Fornecedor é obrigatório',

            'produto_nome.string' => 'O campo Nome é inválido',
            'produto_nome.required' => 'O campo Nome é obrigatório',

            'produto_descricao.string' => 'O campo Descrição é inválido',
            'produto_descricao.required' => 'O campo Descrição é obrigatório',

            'produto_peso.integer' => 'O campo Peso é inválido',
            'produto_peso.required' => 'O campo Peso é obrigatório',

            'unidade_id.required' => 'O campo Unidade é obrigatório',
            'unidade_id.integer' => 'O campo Unidade é inválido',
        ];
    }
}
