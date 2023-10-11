<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInserirRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ContatosController extends Controller
{

    function limpar($dado){

        $dado_limpo = str_replace('(', '', $dado);
        $dado_limpo = str_replace(')', '', $dado_limpo);
        $dado_limpo = str_replace('.', '', $dado_limpo);
        $dado_limpo = str_replace('-', '', $dado_limpo);
        $dado_limpo = str_replace(' ', '', $dado_limpo);

        return $dado_limpo;
    }

    public function index()
    {
        return view('contatos.index');
    }

    public function store(UserInserirRequest $request)
    {
        //LIMPANDO DADOS DA REQUEST

        $celular = $this->limpar($request['celular']);
        

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'celular' => $celular,
            'motivo_contato' => $request->motivo_contato,
            'mensagem' => $request->mensagem,
        ]);
        return redirect()->route('contatos.index')->with('sucess','Sua mensagem foi enviada com sucesso!');
    }
}
