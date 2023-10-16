@if(isset($produto_detalhe->produto_detalhe_id))
<form method="post" action="{{ route('produto_detalhe.update', $produto_detalhe->produto_detalhe_id)}}">
    @csrf
    @method('PUT')
@else
<form method="post" action="{{ route('produto_detalhe.store') }}">
    @csrf
@endif
    <input type="hidden" name="produto_detalhe_id" value="{{ $produto_detalhe->produto_detalhe_id ?? old('produto_id') }}">
    @csrf
    <div>
        <input type="text" name="produto_id" placeholder="ID do produto" class="borda-preta @error('produto_id') is-invalid @enderror" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}">
        @error('produto_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror 
    </div>
    <div>
        <input type="text" name="produto_comprimento" placeholder="Comprimento do Produto" class="borda-preta @error('produto_comprimento') is-invalid @enderror" value="{{ $produto_detalhe->produto_comprimento ?? old('produto_comprimento') }}">
        @error('produto_comprimento')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div>
        <input type="number" name="produto_largura" placeholder="Largura do Produto" class="borda-preta @error('produto_largura') is-invalid @enderror" value="{{ $produto_detalhe->produto_largura ?? old('produto_largura') }}">
        @error('produto_largura')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div>
        <input type="number" name="produto_altura" placeholder="Altura do Produto" class="borda-preta @error('produto_altura') is-invalid @enderror" value="{{ $produto_detalhe->produto_altura ?? old('produto_altura') }}">
        @error('produto_altura')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div>
        <select class="borda-preta @error('unidade_id') is-invalid @enderror" name="unidade_id" placeholder="Unidade" value="{{ $produto_detalhe->unidade_id ?? old('unidade_id') }}">
            {{-- <option value="" selected disabled>Selecione a Unidade de medida</option> --}}
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