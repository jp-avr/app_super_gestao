<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoDetalheInserirRequest extends FormRequest
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
            'produto_id' => ['required', 'integer'],
            'produto_largura' => ['required', 'integer'],
            'produto_comprimento' => ['required', 'integer'],
            'produto_altura' => ['required', 'integer'],
            'unidade_id' => ['required', 'integer'],
        ];
    }

    public function messages()
    {
        return [
            'produto_id.integer' => 'O campo ID do produto é inválido',
            'produto_id.required' => 'O campo ID do produto é obrigatório',

            'produto_largura.integer' => 'O campo Largura do Produto é inválido',
            'produto_largura.required' => 'O campo Largura do Produto é obrigatório',

            'produto_comprimento.integer' => 'O campo Comprimento do Produto é inválido',
            'produto_comprimento.required' => 'O campo Comprimento do Produto é obrigatório',

            'produto_altura.integer' => 'O campo Altura do Produto é inválido',
            'produto_altura.required' => 'O campo Altura do Produto é obrigatório',

            'unidade_id.required' => 'O campo Unidade é obrigatório',
            'unidade_id.integer' => 'O campo Unidade é inválido',
        ];
    }
}
