@extends('layouts.applogado')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="texto-preto">Fornecedor - Adicionar</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>

    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="post" action=" {{ route('app.fornecedor.cadastro') }}">
                <input type="hidden" name="fornecedor_id" value="{{ $fornecedor->fornecedor_id ?? old('fornecedor_id') }}">
                @csrf
                <div>
                    <input type="text" name="fornecedor_nome" placeholder="Nome" class="borda-preta @error('fornecedor_nome') is-invalid @enderror" value="{{ $fornecedor->fornecedor_nome ?? old('fornecedor_nome') }}">
                    @error('fornecedor_nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
                <div>
                    <input type="text" name="fornecedor_site" placeholder="Site" class="borda-preta @error('fornecedor_site') is-invalid @enderror" value="{{ $fornecedor->fornecedor_site ?? old('fornecedor_site') }}">
                    @error('fornecedor_site')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                 
                <div>
                    <input type="text" name="fornecedor_uf" placeholder="UF" class="borda-preta @error('fornecedor_uf') is-invalid @enderror" value="{{ $fornecedor->fornecedor_uf ?? old('fornecedor_uf') }}">
                    @error('fornecedor_uf')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                 
                <div>
                    <input type="text" name="fornecedor_email" placeholder="Email" class="borda-preta @error('fornecedor_email') is-invalid @enderror" value="{{ $fornecedor->fornecedor_email ?? old('fornecedor_email') }}">
                    @error('fornecedor_email')
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