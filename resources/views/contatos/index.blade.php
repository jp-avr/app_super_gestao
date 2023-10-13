@extends('layouts.app')

@section('conteudo') 
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato!</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @if(session('sucesso'))
                <div class="alert alert-success">
                    <p>{{session('sucesso')}}</p>
                </div>
                @endif
                @include('components.formcontato.formcontato',['classe' => 'borda-preta'])
            </div>
        </div>  
    </div>
@endsection



