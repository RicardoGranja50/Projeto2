<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1 style="color: red"> @yield("header")</h1>
        

        
        @yield('conteudo')
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </body>
</html>