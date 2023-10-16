<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoInserirRequest;
use App\Models\Produto;
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
        $produtos = Produto::paginate(10);
        $unidades = Unidade::all();
        return view('app.produtos.index',compact('produtos','request','unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::all();
        $unidades = Unidade::all();
        return view('app.produtos.create',compact('produtos','unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoInserirRequest $request)
    {
        // $unidade_id = Unidade::create([
        //     'unidade' => $request->unidade,
        //     'unidade_descricao' => $request->unidade,
        // ]);

        Produto::create([
            'produto_nome' => $request->produto_nome,
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
        $unidades = Unidade::all();
        return view('app.produtos.edit',compact('produto','unidades'));
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
        // dd($produto);
        $produto = Produto::where('produto_id', '=', $produto->produto_id)->delete();
        return redirect()->route('produto.index');
    }
}
