<x-app-layout>
    <x-slot name="header"></x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F5F5F5;
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
        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
    </style>

    <section id="proyectos" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Proyectos</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagen1.jpg" class="card-img-top" alt="Imagen Proyecto 1">
                        <div class="card-body">
                            <h3 class="card-title">Batalla Galáctica</h3>
                            <p class="card-text">¡Únete a la batalla en el espacio exterior! Pilota tu nave espacial y lucha contra las fuerzas enemigas.</p>
                            <p class="card-text"><small class="text-muted">Plataformas: PC, Xbox, PlayStation</small></p>
                            <a href="#" class="btn btn-primary">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagen2.jpg" class="card-img-top" alt="Imagen Proyecto 2">
                        <div class="card-body">
                            <h3 class="card-title">Aventura en la Jungla</h3>
                            <p class="card-text">Explora la misteriosa jungla y descubre tesoros ocultos mientras luchas contra peligrosas criaturas.</p>
                            <p class="card-text"><small class="text-muted">Plataformas: PC, PlayStation</small></p>
                            <a href="#" class="btn btn-primary">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white text-center py-3">
        <div class="container">
            <p>Derechos de autor &copy; 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
