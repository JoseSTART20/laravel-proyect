<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Ecommerce</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="path/to/your/styles.css">

    <!-- Estilos en línea -->
    <style>
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

        /* Estilos para el tablón de anuncios */
        .ad-board {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            padding: 20px;
            margin-top: 20px;
            background-color: #f5f5f5;
        }

        .ad-card {
            flex: 1 0 calc(33.333% - 16px);
            border: 1px solid #ccc;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .ad-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .ad-card h3 {
            margin: 10px 0;
        }

        .ad-card p {
            margin: 10px 0;
        }

        .ad-card .price {
            font-weight: bold;
            color: #d9534f;
        }

        .ad-card button {
            padding: 10px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .ad-card button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Video de fondo -->
    <video autoplay muted loop id="video-background">
        <source src="videos/fondo4.mp4" type="video/mp4">
        Tu navegador no soporta la etiqueta de video.
    </video>

    <!-- Menú de navegación -->
    <nav>
        <ul id="nav-links">
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
    </nav>

    <!-- Tablón de anuncios -->
    <div class="ad-board">
        <!-- Ejemplo de anuncio -->
        <div class="ad-card">
            <img src="img/imagen.jpg" alt="Imagen del anuncio 1">
            <h3>Título del anuncio 1</h3>
            <p>Descripción breve del anuncio 1.</p>
            <p class="price">$100</p>
            <button>Comprar</button>
        </div>

        <div class="ad-card">
            <img src="img/imagen1.jpg" alt="Imagen del anuncio 2">
            <h3>Título del anuncio 2</h3>
            <p>Descripción breve del anuncio 2.</p>
            <p class="price">$150</p>
            <button>Comprar</button>
        </div>

        <div class="ad-card">
            <img src="img/imagen.jpg" alt="Imagen del anuncio 2">
            <h3>Título del anuncio 2</h3>
            <p>Descripción breve del anuncio 2.</p>
            <p class="price">$150</p>
            <button>Comprar</button>
        </div>

    </div>

    <!-- JavaScript -->
    <script src="path/to/your/scripts.js"></script>
    <script>
        // Manejar el menú desplegable
        function toggleMenu() {
            const navLinks = document.getElementById('nav-links');
            navLinks.style.display = (navLinks.style.display === 'flex') ? 'none' : 'flex';
        }
    </script>
</body>
</html>

