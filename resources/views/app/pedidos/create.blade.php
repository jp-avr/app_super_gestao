@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Pedidos - Adicionar</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('pedido.create') }}">Novo</a></li>
            <li><a href="#">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="post" action=" {{ route('pedido.store') }}">
                <input type="hidden" name="cliente_id" value="{{ $pedido->pedido_id ?? old('pedido_id') }}">
                @csrf

                <div>
                    <select class="borda-preta @error('cliente_id') is-invalid @enderror" name="cliente_id" placeholder="Cliente">
                        <option value="" selected disabled>Selecione o Cliente</option>
                        @foreach($clientes as $cliente)
                        <option value="{{ $cliente->cliente_id}}" {{ old('cliente_id') == $cliente->cliente_id ? 'selected' : ''}}>
                            {{ $cliente->cliente_nome }}
                        </option>
                        @endforeach
                    </select>
                    @error('fornecedor_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <select class="borda-preta @error('produto_id') is-invalid @enderror" name="produto_id" placeholder="Produto">
                        <option value="" selected disabled>Selecione o Produto</option>
                        @foreach($produtos as $produto)
                        <option value="{{ $produto->produto_id}}" {{ old('produto_id') == $produto->produto_id ? 'selected' : ''}}>
                            {{ $produto->produto_nome }}
                        </option>
                        @endforeach
                    </select>
                    @error('produto_id')
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