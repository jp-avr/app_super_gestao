@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Edição de detalhes do Produto</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('produto.create') }}">Novo</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            @component('app.produtodetalhes.form.form_create_edit',['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades])
            @endcomponent
        </div>
    </div>
</div>

@endsection