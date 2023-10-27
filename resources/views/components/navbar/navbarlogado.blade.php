<div class="topo">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a class="title" href="{{ route('app.home') }}">Home</a></li>
            <li><a class="title" href="{{ route('cliente.index') }}">Cliente</a></li>
            <li><a class="title" href="{{ route('pedido.index') }}">Pedido</a></li>
            <li><a class="title" href="{{ route('app.fornecedor') }}">Fornecedor</a></li>
            <li><a class="title" href="{{route('produto.index') }}">Produto</a></li> 
            <li><a class="title" href="{{route('app.sair') }}">Sair</a></li>
        </ul>
    </div>
</div>

{{--  --}}