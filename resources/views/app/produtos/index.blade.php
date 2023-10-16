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
        <div style="width: 60%; margin-left: auto; margin-right: auto;">
            <table border="3" width="100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th>Unidade ID</th>
                        <th>Comprimento</th>
                        <th>Altura</th>
                        <th>Largura</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($produtos as $produto)
                        <tr>
                            <th>{{ $produto->produto_nome}}</th>
                            <th>{{ $produto->produto_descricao}}</th>
                            <th>{{ $produto->produto_peso}}</th>
                            <th>{{ $produto->unidade_id}}</th>
                            <th>{{ $produto->produtoDetalhe->produto_comprimento ?? ''}}</th>
                            <th>{{ $produto->produtoDetalhe->produto_largura ?? ''}}</th>
                            <th>{{ $produto->produtoDetalhe->produto_altura ?? ''}}</th>
                            <th><a href=" {{ route('produto.show', $produto->produto_id) }} ">Visualizar</a></th>

                            <th>
                                <form id="form_{{$produto->produto_id}}" method="post" action="{{ route('produto.show', $produto->produto_id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$produto->produto_id}}').submit()">Excluir</a>
                                </form>
                            </th>

                            <th><a href="{{ route('produto.edit', $produto->produto_id) }}">Editar</a></th>
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