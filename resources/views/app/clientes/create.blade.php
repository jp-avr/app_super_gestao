@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Clientes - Adicionar</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('cliente.create') }}">Novo</a></li>
            <li><a href="#">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="post" action=" {{ route('cliente.store') }}">
                <input type="hidden" name="cliente_id" value="{{ $cliente->cliente_id ?? old('cliente_id') }}">
                @csrf

                <div>
                    <input type="text" name="cliente_nome" placeholder="Nome do cliente" class="borda-preta @error('cliente_nome') is-invalid @enderror" value="{{ $cliente->cliente_nome ?? old('cliente_nome') }}">
                    @error('cliente_nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
                
                <button type="submit" class="borda-preta">Adicionar</button> 
            </form>
        </div>
    </div>
</div>

@endsection