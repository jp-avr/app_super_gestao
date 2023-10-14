<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Gestão</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
</head>
    <body>
        @include('components.navbar.navbarlogado')

        @yield('conteudo')
    </body>
</html>