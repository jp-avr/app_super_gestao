<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoDetalheInserirRequest;
use App\Models\Produto;
use App\Models\ProdutoDetalhe;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ProdutoDetalheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all();
        return view('app.produtodetalhes.create', compact('unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoDetalheInserirRequest $request)
    {
        ProdutoDetalhe::create([
            'produto_id' => $request->produto_id,
            'unidade_id' => $request->unidade_id,
            'produto_comprimento' => $request->produto_comprimento,
            'produto_largura' => $request->produto_largura,
            'produto_altura' => $request->produto_altura
        ]);

        return redirect()->route('produto_detalhe.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutoDetalhe $produto_detalhe)
    {
        $unidades = Unidade::all();
        return view('app.produtodetalhes.edit',compact('unidades','produto_detalhe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoDetalheInserirRequest $request, ProdutoDetalhe $produto_detalhe)
    {
        $produto_detalhe->update([
            'produto_id' => $request->get('produto_id'),
            'unidade_id' => $request->get('unidade_id'),
            'produto_comprimento' => $request->get('produto_comprimento'),
            'produto_largura' => $request->get('produto_largura'),
            'produto_altura' => $request->get('produto_altura'),
        ]);

        return redirect()->route('produto_detalhe.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
