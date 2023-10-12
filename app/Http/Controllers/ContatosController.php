<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteContatoInserirRequest;
use App\Models\SiteContato;

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

    public function store(SiteContatoInserirRequest $request)
    {
        //LIMPANDO DADOS DA REQUEST

        $telefone = $this->limpar($request['telefone']);
        
        SiteContato::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $telefone,
            'motivo_contato' => $request->motivo_contato,
            'mensagem' => $request->mensagem,
        ]);
        return redirect()->route('contatos.index')->with('sucess','Sua mensagem foi enviada com sucesso!');
    }
}
