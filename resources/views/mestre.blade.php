<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
</head>
<body>
    <h2 align="center">@yield('header')</h2>
    @yield('conteudo')
    <div class="menu-rodape">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Opções de navegação</h2>
        <a href="{{route('index')}}">Inicio</a>
        <a href="{{route('noticias')}}">Noticias</a>
        <a href="{{route('empresa')}}">Empresa</a>
        <a href="{{route('ondeestamos')}}">Onde Estamos</a>
        <a href="{{route('contactos')}}">Contactos</a>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
</body>
</html>