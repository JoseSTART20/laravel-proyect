<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Ecommerce</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Video de fondo */
        #video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            background-size: cover;
        }

        /* Barra de navegación */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.3);
            padding: 10px 20px;
            z-index: 1000;
        }

        /* Enlaces de navegación */
        .nav-links {
            display: flex;
            gap: 20px; /* Espaciamiento entre enlaces */
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-links a {
            text-decoration: none;
            color: black;
            padding: 10px;
            border-radius: 5px;
            background-color: #FF2D20;
            transition: background-color 0.3s;
            /* Agrega una sombra sutil */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .nav-links a:hover {
            background-color: #D6301F;
        }

        /* Botón de menú (hamburguesa) */
        .menu-toggle {
            display: none; /* Ocultado por defecto */
            font-size: 24px;
            cursor: pointer;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            /* Mostrar el botón de menú y ocultar los enlaces de navegación */
            .nav-links {
                display: none;
                flex-direction: column;
                align-items: center;
                gap: 10px; /* Espaciamiento en columnas */
            }

            .menu-toggle {
                display: block; /* Muestra el botón de menú */
            }
        }
    </style>
</head>
<body>
    <!-- Video de fondo -->
    <video autoplay muted loop id="video-background">
        <source src="videos/fondo4.mp4" type="video/mp4">
        <!-- Mensaje si el navegador no soporta video -->
        Tu navegador no soporta la etiqueta de video.
    </video>

    <!-- Barra de navegación -->
    <div class="navbar">
        <!-- Botón de menú (hamburguesa) -->
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>

        <!-- Contenedor de enlaces de navegación -->
        <ul id="nav-links" class="nav-links">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Categorías</a></li>
            <li><a href="#">Contacto</a></li>

            <!-- Opciones de login y registro -->
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Registrar</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <h1>Bienvenidos a Nuestro Ecommerce</h1>
        <p>Encuentra los mejores productos aquí</p>
    </div>

    <!-- JavaScript para manejar el menú desplegable -->
    <script>
        function toggleMenu() {
            const navLinks = document.getElementById('nav-links');
            // Cambia entre mostrar u ocultar los enlaces de navegación
            if (navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
            }
        }
    </script>
</body>
</html>