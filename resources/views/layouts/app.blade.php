<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria Konecta</title>
    <!-- Agrega enlaces a tus estilos CSS y scripts JS aquí -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    <header>
        <!-- Aquí puedes agregar la barra de navegación común a todas las páginas -->
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="{{ route('productos.index') }}">Productos</a></li>
                <!-- Agrega más elementos de navegación según tu aplicación -->
            </ul>
        </nav>


    </header>

    <main>
        <!-- Aquí se incluirá el contenido específico de cada página -->
        @yield('content')
    </main>

    <footer>
        <!-- Pie de página común a todas las páginas -->
        <p>Derechos de autor &copy; {{ date('Y') }} Tu Empresa</p>
    </footer>

    <!-- Agrega scripts JS al final del documento si es necesario -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
