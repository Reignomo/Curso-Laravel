<html>
    <!-- Head -->
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>@section('titulo')</title>
    </head>
<!-- Fim Head -->
    <body>
    <script src="{{ asset('js/app.css') }}" type="text/javascript"></script>
        <div>
            @yield('conteudo')
        </div>
    </body>
</html>