<html>
    <!-- Head -->
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>@section('titulo')</title>
    </head>
<!-- Fim Head -->
    <style>
    body{
     width:80%;
     margin:auto;
     margin-top:15%;
    }
    </style>
    <body>
    @hasSection('minha_secao_produtos')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
        <p class="text">
            @yield('minha_secao_produtos')
        </p>
        <a href="#" class="card-link">Saber mais</a>
        <a href="#" class="card-link">Adicionar ao carrinho<span></a> 
        </div>
    </div>
    @endif
    </body>
    <script src="{{ asset('js/app.css') }}" type="text/javascript"></script>
</html>