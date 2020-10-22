<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nombre app - @yield('titulo')</title>
    
    <script src="{{asset('js/app.js')}}" defer></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('contenido')
    </div>
</body>
</html>