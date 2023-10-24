@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Listagem de Clientes</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('cliente.create') }}">Novo</a></li>
            <li><a href="#">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 60%; margin-left: auto; margin-right: auto;">
            <table border="3" width="100%">
                <thead>
                    <tr>
                        <th>Nome</th>

                    </tr>
                </thead>

                <tbody>
                    @forelse($clientes as $cliente)
                        <tr>
                            <th>{{ $cliente->cliente_nome}}</th>

                            <th><a href=" {{ route('cliente.show', $cliente->cliente_id) }} ">Visualizar</a></th>

                            <th>
                                <form id="form_{{$cliente->cliente_id}}" method="post" action="{{ route('cliente.show', $cliente->cliente_id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$cliente->cliente_id}}').submit()">Excluir</a>
                                </form>
                            </th>

                            <th><a href="{{ route('cliente.edit', $cliente->cliente_id) }}">Editar</a></th>
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
                    {{ $clientes->appends($request->all())->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection