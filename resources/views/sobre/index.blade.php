@extends('layouts.app')


<div class="topo">

    <div class="logo">
        <img src="img/logo.png">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('home') }}">Principal</a></li>
            <li><a href="{{ route('sobrenos') }}">Sobre Nós</a></li>
            <li><a href="{{ route('contatos') }}">Contato</a></li>
        </ul>
    </div>
</div>

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Olá, eu sou o Super Gestão</h1>
    </div>

    <div class="informacao-pagina">
        <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
        <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
    </div>  
</div>

<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="img/facebook.png">
        <img src="img/linkedin.png">
        <img src="img/youtube.png">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(98) 99111-9229</span>
        <br>
        <span>joaopedroazevedoreisveras@gmail.com</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src="img/mapa.png">
    </div>
</div>
