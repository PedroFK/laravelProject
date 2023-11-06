

<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/defaultStyle.css')}}">
    </head>

    <body>
        @include('site.layouts._partials.navbar')
        @yield('content')
    </body>
  </html>