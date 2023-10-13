@extends('layouts.app')

@section('conteudo')
    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                <div class="chamada">
                    <img src="/img/check.png">
                    <span class="texto-branco"><strong>Gestão completa e descomplicada</strong></span>
                </div>
                <div class="chamada">
                    <img src="img/check.png">
                    <span class="texto-branco"><strong>Sua empresa na nuvem</strong></span>
                </div>
            </div>

            <div class="video">
                <img src="img/player_video.jpg">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato pelo formulário abaixo.<p>
                    @include('components.formcontato.formcontato',['classe' => 'borda-branca'])
            </div>
        </div>
    </div>
@endsection