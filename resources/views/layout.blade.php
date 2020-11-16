<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
        <h1 style="color: red"> @yield("header")</h1>
        
        @yield('c')
        <div class="container">
             <div class="row">
                <div class="col-sm">
                    Uma de três colunas
                </div>
                <div class="col-sm">
                    Uma de três colunas
                </div>
                <div class="col-sm">
                    Uma de três colunas
                </div>
            </div>
        </div>
        @yield('conteudo')
    </body>
</html>