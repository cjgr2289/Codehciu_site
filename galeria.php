<?php
// Página: Galería - Memorias de Encuentros
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memoria de Encuentros y Exposiciones | CODEHCIU</title>
    <meta name="description" content="Galería de fotos de encuentros y exposiciones de CODEHCIU.">

    <!-- Favicon -->
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- CSS base del proyecto -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/variables.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    <!-- CSS específico de la galería -->
    <link rel="stylesheet" href="./assets/css/galeria.css">
</head>
<body>

    <!-- NAVBAR -->
    <?php include 'components/navbar.php'; ?>

    <!-- ========================================== -->
    <!-- CONTENIDO PRINCIPAL: GALERÍA               -->
    <!-- ========================================== -->

    <main>
        <section id="galeria" class="galeria-section">
            <div class="galeria-container">

                <!-- COLUMNA IZQUIERDA: TEXTO -->
                <div class="galeria-info">
                    <h1 class="galeria-title">
                        <span data-i18n="galeria_title_l1">Memoria de Encuentros</span><br>
                        <span data-i18n="galeria_title_l2">y exposiciones</span>
                    </h1>

                    <h2 class="galeria-subtitle" id="galeriaSubtitle">
                        <!-- El contenido lo carga galeria.js -->
                    </h2>

                    <p class="galeria-description" id="galeriaDescription">
                        <!-- El contenido lo carga galeria.js -->
                    </p>
                </div>

                <!-- COLUMNA DERECHA: CARRUSEL -->
                <div class="galeria-carousel-wrapper">
                    <div class="galeria-carousel" id="galeriaCarousel">
                        <div class="galeria-track" id="galeriaTrack">
                            <!-- Las imágenes se inyectan desde galeria.js -->
                        </div>
                    </div>

                    <!-- Controles -->
                    <div class="galeria-controls">
                        <button class="galeria-btn galeria-btn-prev" id="galeriaPrev" aria-label="Anterior">
                            <span class="galeria-btn-icon">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            <span class="galeria-btn-label" data-i18n="galeria_prev">Anterior</span>
                        </button>

                        <button class="galeria-btn galeria-btn-next" id="galeriaNext" aria-label="Próxima">
                            <span class="galeria-btn-label" data-i18n="galeria_next">Próxima</span>
                            <span class="galeria-btn-icon">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </button>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include 'components/footer.php'; ?>

    <!-- ========================================== -->
    <!-- SCRIPTS                                    -->
    <!-- ========================================== -->

    <!-- i18n base (debe ir ANTES de los lang-*) -->
    <script src="./assets/js/lang.js"></script>

    <!-- Traducciones del navbar y footer (ya los tienes) -->
    <script src="./assets/js/lang/lang-nav.js"></script>
    <script src="./assets/js/lang/lang-footer.js"></script>

    <!-- Traducciones específicas de galería -->
    <script src="./assets/js/lang/lang-galeria.js"></script>

    <!-- Lógica del navbar y footer (ya los tienes) -->
    <script src="./assets/js/nav.js"></script>
    <script src="./assets/js/footer.js"></script>

    <!-- Lógica de la galería -->
    <script src="./assets/js/galeria.js"></script>

</body>
</html>