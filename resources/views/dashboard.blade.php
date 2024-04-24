<x-app-layout>
    <x-slot name="header"></x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F5F5F5;
        }
        .navbar {
            background-color: #1E88E5 !important;
        }
        .navbar-brand,
        .nav-link {
            color: #FFFFFF !important;
        }
        .navbar-brand:hover,
        .nav-link:hover {
            color: #FFD700 !important;
        }
        section {
            padding: 50px 0;
        }
        h2 {
            color: #FFD700;
        }
        .card {
            background-color: #FFFFFF;
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .btn-primary {
            background-color: #FFD700;
            border-color: #FFD700;
        }
        .btn-primary:hover {
            background-color: #FFA500;
            border-color: #FFA500;
        }
        footer {
            background-color: #1E88E5;
            color: #FFFFFF;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="">Inicio</a>
          <a class="navbar-brand" href="{{url('activities')}}">Actividades</a>
          <a class="navbar-brand" href="{{url('services')}}">Servicios</a>
          <a class="navbar-brand" href="{{url('proyects')}}">Proyectos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <section id="sobre-mi">
        <div class="container">
            <h2 class="text-center mb-4">Sobre Mí</h2>
            <p class="lead text-center">¡Bienvenido a mi mundo de desarrollo de videojuegos! Soy un apasionado de la creación de experiencias interactivas y emocionantes.</p>
            <p class="lead text-center">Mis habilidades incluyen:</p>
            <ul class="list-unstyled text-center">
                <li>Desarrollo de juegos en Unity</li>
                <li>Diseño de niveles</li>
                <li>Programación en C#</li>
            </ul>
            <p class="lead text-center">¡Déjame llevarte en un viaje a través de algunos de mis emocionantes proyectos!</p>
        </div>
    </section>

    <section id="proyectos" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Proyectos</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Batalla Galáctica</h3>
                            <p class="card-text">¡Únete a la batalla en el espacio exterior! Pilota tu nave espacial y lucha contra las fuerzas enemigas.</p>
                            <p class="card-text"><small class="text-muted">Plataformas: PC, Xbox, PlayStation</small></p>
                            <a href="{{url('proyects')}}" class="btn btn-primary">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Aventura en la Jungla</h3>
                            <p class="card-text">Explora la misteriosa jungla y descubre tesoros ocultos mientras luchas contra peligrosas criaturas.</p>
                            <p class="card-text"><small class="text-muted">Plataformas: PC, PlayStation</small></p>
                            <a href="{{url('proyects')}}" class="btn btn-primary">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <h2 class="text-center mb-4">Contacto</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje:</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </section>

    <footer class="text-white text-center py-3">
        <div class="container">
            <p>Derechos de autor &copy; 2024</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
