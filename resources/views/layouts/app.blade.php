<html>
    <head>
        <link href="{{ (asset('css/app.css'))}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Sistema de cadastro</title>
        <meta name="csrf-token" content="{ { csrf_toke() } }">
    </head>
    <style>
        .container{
            margin-top:80px;
        }
    </style>
    <body>
    @component('../componentes/navBar', ["current" => $current])
        @endcomponent
        <div class="container">
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif    
            </mains>
        </div>
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>