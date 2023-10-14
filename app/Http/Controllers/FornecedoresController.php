<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedorInserirRequest;
use App\Models\Fornecedor;
use App\Models\MotivoContato;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(Request $request)
    {   
        $fornecedores = null;
        if($request->fornecedor_nome){
            $fornecedores = Fornecedor::where('fornecedor_nome','=',$request->fornecedor_nome)->get();
        }

        return view('app.fornecedores.index',compact('fornecedores'));
    }

    public function listar()
    {   
        $fornecedores = Fornecedor::all();
        return view('app.fornecedores.listar', compact('fornecedores'));
    }

    public function adicionar()
    {
        return view('app.fornecedores.adicionar');
    }

    public function store(FornecedorInserirRequest $request)
    {
        Fornecedor::create([
            'fornecedor_nome' => $request->fornecedor_nome,
            'fornecedor_uf' => $request->fornecedor_uf,
            'fornecedor_email' => $request->fornecedor_email,
            'fornecedor_site' => $request->fornecedor_site,
        ]);

        return redirect()->route('app.fornecedor')->with('sucesso','Fornecedor adicionado com sucesso!');
    }
}
