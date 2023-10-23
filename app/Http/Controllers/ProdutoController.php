<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoInserirRequest;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\ProdutoDetalhe;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $produtos = Produto::paginate(5);
        // $unidades = Unidade::all();

        return view('app.produtos.index',compact('produtos','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedores = Fornecedor::all();
        $produtos = Produto::all();
        $unidades = Unidade::all();
        return view('app.produtos.create',compact('produtos','unidades','fornecedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoInserirRequest $request)
    {

        Produto::create([
            'produto_nome' => $request->produto_nome,
            'fornecedor_id' => $request->fornecedor_id,
            'produto_descricao' => $request->produto_descricao,
            'produto_peso' => $request->produto_peso,
            'unidade_id' => $request->unidade_id,
        ]);

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        $unidades = Unidade::all();
        return view('app.produtos.show',compact('produto','unidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $fornecedores = Fornecedor::all();
        $unidades = Unidade::all();
        return view('app.produtos.edit',compact('produto','unidades','fornecedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->update([
            'fornecedor_id' => $request->get('fornecedor_id'),
            'produto_nome' => $request->get('produto_nome'),
            'produto_descricao' => $request->get('produto_descricao'),
            'produto_peso' => $request->get('produto_peso'),
            'unidade_id' => $request->get('unidade_id'),
        ]);

        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto = Produto::where('produto_id', '=', $produto->produto_id)->delete();
        return redirect()->route('produto.index');
    }
}
