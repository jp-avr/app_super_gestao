@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Edição de Produtos</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('produto.create') }}">Novo</a></li>
            <li><a href="#">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="post" action=" {{ route('produto.update', $produto) }}">
                <input type="hidden" name="produto_id" value="{{ $produto->produto_id ?? old('produto_id') }}">
                @csrf
                @method('PUT')
                <div>
                    <input type="text" name="produto_nome" placeholder="Nome do produto" class="borda-preta @error('produto_nome') is-invalid @enderror" value="{{ $produto->produto_nome ?? old('produto_nome') }}">
                    @error('produto_nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
                <div>
                    <input type="text" name="produto_descricao" placeholder="Descrição do Produto" class="borda-preta @error('produto_descricao') is-invalid @enderror" value="{{ $produto->produto_descricao ?? old('produto_descricao') }}">
                    @error('produto_descricao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                 
                <div>
                    <input type="number" name="produto_peso" placeholder="Peso do Produto" class="borda-preta @error('produto_peso') is-invalid @enderror" value="{{ $produto->produto_peso ?? old('produto_peso') }}">
                    @error('produto_peso')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                 
                <div>
                    <select class="borda-preta @error('unidade_id') is-invalid @enderror" name="unidade_id" placeholder="Unidade" value="{{ $produto->unidade_id ?? old('unidade_id') }}">
                        {{-- <option value="" selected >Selecione a Unidade de medida</option> --}}
                        @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id}}" {{ old('unidade_id') == $unidade->unidade_id ? 'selected' : ''}}>
                            {{ $unidade->unidade_descricao }}
                        </option>
                        @endforeach
                    </select>
                    @error('unidade_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <button type="submit" class="borda-preta">Salvar</button> 
            </form>
        </div>
    </div>
</div>

@endsection