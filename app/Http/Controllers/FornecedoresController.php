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
        return view('app.fornecedores.index');
    }

    public function listar(Request $request)
    {   
        $fornecedores = Fornecedor::where('fornecedor_nome', 'like', '%'.$request->input('fornecedor_nome').'%')
        ->where('fornecedor_uf','like','%'.$request->input('fornecedor_uf').'%')
        ->where('fornecedor_site','like','%'.$request->input('fornecedor_site').'%')
        ->where('fornecedor_email','like','%'.$request->input('fornecedor_email').'%')
        ->paginate(2);

        
        
        return view('app.fornecedores.listar', compact('fornecedores','request'));
    }

    public function adicionar()
    {
        return view('app.fornecedores.adicionar');
    }

    public function update_view($fornecedor_id)
    {
        $fornecedor = Fornecedor::findOrFail($fornecedor_id);

        return view('app.fornecedores.update', compact('fornecedor'));
    }

    public function update(Request $request, $fornecedor_id)
    {   
        $fornecedor = Fornecedor::findOrFail($fornecedor_id);
        
        // if(Fornecedor::where('fornecedor_nome'))
        $fornecedor->update([
            'fornecedor_nome' => $request->get('fornecedor_nome'),
            'fornecedor_uf' => $request->get('fornecedor_uf'),
            'fornecedor_email' => $request->get('fornecedor_email'),
            'fornecedor_site' => $request->get('fornecedor_site'),
        ]);
        
        return redirect()->route('app.fornecedor');
    }

    public function destroy($fornecedor_id)
    {
        
        $fornecedor_id = Fornecedor::where('fornecedor_id', '=', $fornecedor_id)->delete();
        return redirect()->route('app.fornecedor');
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
