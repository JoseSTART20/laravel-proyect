<x-app-layout>
    <x-slot name="header"></x-slot>

    <!-- Agrega la referencia a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gtEjrD/SeCqF5SR6x6co3cc0mq/K2r0JeAdn9B0z0wr1KzvC+Kzr0Bk985kcpvIV" crossorigin="anonymous">
    <!-- Agrega tu CSS personalizado -->
    <link rel="stylesheet" href="styles.css">
    <body>
        <header class="bg-dark text-white p-5">
            <div class="container">
                <h1>¡Descubre Nuestros Servicios de Desarrollo!</h1>
                <p>En nuestra empresa, ofrecemos una amplia gama de servicios de desarrollo para satisfacer tus necesidades.</p>
            </div>
        </header>

        <section class="services py-5">
            <div class="container">
                <h2>Nuestros Servicios</h2>
                <ul class="list-group">
                    <li class="list-group-item">Diseño y Desarrollo Web</li>
                    <li class="list-group-item">Desarrollo de Aplicaciones Móviles</li>
                    <li class="list-group-item">Desarrollo de Software a Medida</li>
                    <li class="list-group-item">Integración de Sistemas</li>
                    <li class="list-group-item">Consultoría en Tecnología</li>
                </ul>
            </div>
        </section>

        <footer class="bg-dark text-white p-5">
            <div class="container">
                <p>Contáctanos hoy mismo para obtener más información sobre nuestros servicios.</p>
            </div>
        </footer>

        <!-- Agrega la referencia a Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/YLjHzZvfTYpGe+/Ox9vlKGCgmSNcCPwyhpcvscOsY4fBoVxF+2rKj1KkI21mk0/" crossorigin="anonymous"></script>
    </body>
</x-app-layout>