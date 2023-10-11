@extends('layouts.app')

@section('conteudo') 
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato!</h1>
        </div>

        <div class="informacao-pagina">

            @if ($errors->any())
            <div class="alert alert-danger">Erro!
                <br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="contato-principal">
                @component('components.formcontato.formcontato',['classe' => 'borda-preta'])
                @endcomponent
            </div>
        </div>  
    </div>
@endsection



