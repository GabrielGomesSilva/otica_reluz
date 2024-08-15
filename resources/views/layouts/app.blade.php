<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container__principal">
        <div class="menu__lateral">
            <div>
                <img src="{{ asset('storage/images/logo.png') }}" alt="Image" height="80px">
            </div>
            <div>Listar Pedidos</div>
            <div>Criar Pedidos</div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
