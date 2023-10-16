@if(isset($produto->produto_id))
<form method="post" action="{{ route('produto.update') }}">
    @csrf
    @method('PUT')
@else
<form method="post" action="{{ route('produto.store') }}">
    @csrf
@endif
    <input type="hidden" name="produto_id" value="{{ $produto->produto_id ?? old('produto_id') }}">
    @csrf
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
        <select class="borda-preta @error('unidade_id') is-invalid @enderror" name="unidade_id" placeholder="Unidade">
            <option value="" selected disabled>Selecione a Unidade de medida</option>
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
    
    <button type="submit" class="borda-preta">Adicionar</button> 
</form>