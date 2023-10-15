@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Listagem de Produtos</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('produto.create') }}">Novo</a></li>
            <li><a href="#">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 50%; margin-left: auto; margin-right: auto;">
            <table border="3" width="100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th>Unidade</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($produtos as $produto)
                        <tr>
                            <th>{{ $produto->produto_nome}}</th>
                            <th>{{ $produto->produto_descricao}}</th>
                            <th>{{ $produto->produto_peso}}</th>
                            <th>{{ $produto->unidade_id}}</th>
                            <th><a href="{{ route('produto.show', $produto->produto_id) }}">Visualizar</a></th>
                            <th><a href="{{ route('produto.destroy', $produto->produto_id) }}">Excluir</a></th>
                            <th><a href="{{ route('produto.index', $produto->produto_id) }}">Editar</a></th>
                        </tr>

                        @empty
                        <tr>
                            <td style="border: none;">Nenhum produto encontrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>           

            <div class="paginate">
                <nav class="d-flex justify-content-end">
                    {{ $produtos->appends($request->all())->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection