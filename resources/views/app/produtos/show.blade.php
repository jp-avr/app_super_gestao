@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Visualizar Produtos</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('produto.create') }}">Novo</a></li>
            <li><a href="#">Consulta</a></li>
        </ul>

    </div>
    
    <div class="informacao-pagina">
        <div style="width: 50%; margin-left: auto; margin-right: auto;">
            <table border="1" width="100%" >
                <tr>
                    <td>ID: </td>
                    <td> {{ $produto->produto_id }}</td>
                </tr>
                <tr>
                    <td>Nome: </td>
                    <td> {{ $produto->produto_nome }}</td>
                </tr>
                <tr>
                    <td>Descrição: </td>
                    <td> {{ $produto->produto_descricao }}</td>
                </tr>
                <tr>
                    <td>Peso: </td>
                    <td> {{ $produto->produto_peso }} kg</td>
                </tr>
                <tr>
                    <td>Unidade de medida: </td>
                    <td> {{ $produto->unidade_id }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection