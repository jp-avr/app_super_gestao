@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Fornecedor - Listar</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 50%; margin-left: auto; margin-right: auto;">
            <table border="3" width="100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>UF</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($fornecedores as $fornecedor)
                        <tr>
                            <th>{{ $fornecedor->fornecedor_nome}}</th>
                            <th>{{ $fornecedor->fornecedor_site}}</th>
                            <th>{{ $fornecedor->fornecedor_uf}}</th>
                            <th>{{ $fornecedor->fornecedor_email}}</th>
                            <th><a href="{{ route('app.fornecedor.destroy', $fornecedor->fornecedor_id) }}">Excluir</a></th>
                            <th><a href="{{ route('app.fornecedor.update.index', $fornecedor->fornecedor_id) }}">Editar</a></th>
                        </tr>

                        @empty
                        <tr>
                            <td style="border: none;">Nenhum fornecedor encontrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>           

            <div class="paginate">
                <nav class="d-flex justify-content-end">
                    {{ $fornecedores->appends($request->all())->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection