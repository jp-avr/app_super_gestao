@extends('layouts.app')

@section('conteudo') 
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
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
                <form method="get" action=" {{ route('contatos.store') }} ">
                    <input type="text" placeholder="Nome" name="name" class="borda-preta">
                    <br>
                    <input type="text" placeholder="Telefone" name="celular" class="borda-preta">
                    <br>
                    <input type="text" placeholder="E-mail" name="email" class="borda-preta">
                    <br>
                    <select name="motivo_contato" class="borda-preta">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="1">Dúvida</option>
                        <option value="2">Elogio</option>
                        <option value="3">Reclamação</option>
                    </select>
                    <br>
                    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem" class="borda-preta"></textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>  
    </div>
@endsection



