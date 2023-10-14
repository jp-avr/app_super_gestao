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
            'nome' => ['required', 'string'],
            'sobrenome' => ['required', 'string'],
            'email' => ['required','email', 'string'],
            'dia_id' => ['required','integer'],
            'mes_id' => ['required','integer'],
            'ano_id' => ['required','integer'],
            'sexo' => ['required','integer'],
            'password' => ['required','string'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',

            'sobrenome.required' => 'O campo Sobrenome é obrigatório',

            'email.required' => 'O campo Email é obrigatório',
            'email.email' => 'Insira um Email válido',

            'dia_id.required' => 'O Dia é obrigatório',
            
            'mes_id.required' => 'O Mês é obrigatório',
            
            'ano_id.required' => 'O Ano é obrigatório',

            'password.required' => 'A senha é obrigatória',
        ];
    }
}
