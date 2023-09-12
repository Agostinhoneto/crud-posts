<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    @stack('styles')
    <title>@yield('title','Meu Titulo')</title>
</head>
<body>

    <h1>Meu Layout</h1>
    @yield('sidebar')
    <div>
        @yield('content')
    </div>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    @stack('scripts')
</body>
</html>
