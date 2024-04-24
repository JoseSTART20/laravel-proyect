<x-app-layout>
    <x-slot name="header"></x-slot>
    <body> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <section id="servicios" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Servicios</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title">Desarrollo Web</h3>
                                <p class="card-text">Desarrollo de sitios web modernos y funcionales utilizando tecnologías como HTML, CSS, JavaScript, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title">Desarrollo de Aplicaciones</h3>
                                <p class="card-text">Desarrollo de aplicaciones móviles y de escritorio utilizando frameworks y herramientas actuales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title">Consultoría</h3>
                                <p class="card-text">Asesoramiento y consultoría en tecnologías de la información para mejorar la eficiencia y productividad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <footer class="bg-dark text-white text-center py-3">
                <p>Derechos de autor &copy; 2024</p>
            </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>   
</x-app-layout>