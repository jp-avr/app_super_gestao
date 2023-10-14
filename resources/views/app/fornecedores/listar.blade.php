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
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            @foreach($fornecedores as $fornecedor)

            <ul>
                <li>
                    {{ $fornecedor->fornecedor_nome }}
                </li>
                <li>
                    {{ $fornecedor->fornecedor_uf }}
                </li>
                <li>
                    {{ $fornecedor->fornecedor_email }}
                </li>
                <li>
                    {{ $fornecedor->fornecedor_site }}
                </li>
                
            </ul>
            

            @endforeach
        </div>
    </div>
</div>

@endsection