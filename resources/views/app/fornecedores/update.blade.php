@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Fornecedor - UPDATE</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="get" action="{{ route('app.fornecedor.update',$fornecedor) }}">
                @csrf
                <input type="text" name="fornecedor_nome" value="{{ $fornecedor->fornecedor_nome }}" placeholder="Nome" class="borda-preta"> 
                <input type="text" name="fornecedor_site" value="{{ $fornecedor->fornecedor_site }}" placeholder="Site" class="borda-preta"> 
                <input type="text" name="fornecedor_uf" value="{{ $fornecedor->fornecedor_uf }}" placeholder="UF" class="borda-preta"> 
                <input type="text" name="fornecedor_email" value="{{ $fornecedor->fornecedor_email }}" placeholder="Email" class="borda-preta">
                <button type="submit" class="borda-preta">Salvar</button> 
            </form>
        </div>
    </div>
</div>

@endsection