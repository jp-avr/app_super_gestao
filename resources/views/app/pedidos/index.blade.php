@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Listagem de Pedidos</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('pedido.create') }}">Novo</a></li>
            <li><a href="#">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 60%; margin-left: auto; margin-right: auto;">
            <table border="3" width="100%">
                <thead>
                    <tr>
                        <th>ID do pedido</th>
                        <th>Cliente</th>
                        <th>Produtos</th>
                        
                    </tr>
                </thead>

                <tbody>
                    @forelse($pedidos as $pedido)
                        <tr>
                            <th>{{ $pedido->pedido_id}}</th>
                            <th>{{ $pedido->cliente->cliente_nome}}</th>
                            {{-- <th> 
                                @foreach($produtos as $produto)
                                    {{ $produto->produto_nome}}
                                @endforeach
                            </th> --}}

                            

                            <th><a href=" {{ route('pedido.show', $pedido->pedido_id) }} ">Visualizar</a></th>

                            <th>
                                <form id="form_{{$pedido->pedido_id}}" method="post" action="{{ route('pedido.show', $pedido->pedido_id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$pedido->pedido_id}}').submit()">Excluir</a>
                                </form>
                            </th>

                            <th><a href="{{ route('pedido.edit', $pedido->pedido_id) }}">Editar</a></th>
                        </tr>

                        @empty
                        <tr>
                            <td style="border: none;">Nenhum cliente encontrado</td>
                        </tr>

                        
                    @endforelse
                </tbody>
            </table>           

            <div class="paginate">
                <nav class="d-flex justify-content-end">
                    {{ $pedidos->appends($request->all())->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection