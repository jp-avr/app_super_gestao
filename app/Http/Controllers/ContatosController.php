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

        $telefone = $this->limpar($request['site_contato_telefone']);
        
        SiteContato::create([
            'site_contato_nome' => $request->site_contato_nome,
            'site_contato_email' => $request->site_contato_email,
            'site_contato_telefone' => $telefone,
            'site_contato_motivo_contato' => $request->site_contato_motivo_contato,
            'site_contato_mensagem' => $request->site_contato_mensagem,
        ]);
        return redirect()->route('contatos.index')->with('sucess','Sua mensagem foi enviada com sucesso!');
    }
}
