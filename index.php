<?php
// ./index.php
$current_page = 'inicio';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODEHCIU</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
    
    <!-- CSS Global -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/variables.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    
    <!-- CSS por Sección -->
    <link rel="stylesheet" href="./assets/css/hero.css">
    <link rel="stylesheet" href="./assets/css/quienes-somos.css">
    <link rel="stylesheet" href="./assets/css/politicas.css">
    <link rel="stylesheet" href="./assets/css/ninos.css">
    <link rel="stylesheet" href="./assets/css/mujeres.css">
    <link rel="stylesheet" href="./assets/css/impacto.css">
    <link rel="stylesheet" href="./assets/css/informes.css">
    <link rel="stylesheet" href="./assets/css/pinceladas.css">
    <link rel="stylesheet" href="./assets/css/podcast.css">
    <link rel="stylesheet" href="./assets/css/noticias.css">
    <link rel="stylesheet" href="./assets/css/donacion-modal.css">
    <link rel="stylesheet" href="./assets/css/modal-mujeres.css">
    <link rel="stylesheet" href="./assets/css/modal-ninos.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Incluir navbar -->
    <?php include_once __DIR__ . '/components/navbar.php'; ?>
    
    <!-- Contenedor principal -->
    <main id="main-container">
        <?php include_once __DIR__ . '/pages/inicio/index.php'; ?>
        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </main>
    
    <!-- Scripts Globales -->
    <script src="./assets/js/nav.js"></script>
    
    <!-- Sistema de Idiomas - CORE (debe ir primero) -->
    <script src="./assets/js/lang.js"></script>
    
    <!-- Traducciones por sección -->
    <script src="./assets/js/lang/lang-nav.js"></script>
    <script src="./assets/js/lang/lang-hero.js"></script>
    <script src="./assets/js/lang/lang-quienes-somos.js"></script>
    <script src="./assets/js/lang/lang-impacto.js"></script>
    <script src="./assets/js/lang/lang-politicas.js"></script>
    <script src="./assets/js/lang/lang-ninos.js"></script>
    <script src="./assets/js/lang/lang-mujeres.js"></script>
    <script src="./assets/js/lang/lang-informes.js"></script>
    <script src="./assets/js/lang/lang-pinceladas.js"></script>
    <script src="./assets/js/lang/lang-podcast.js"></script>
    <script src="./assets/js/lang/lang-noticias.js"></script>
    <script src="./assets/js/lang/lang-footer.js"></script>
    <script src="./assets/js/lang/lang-donacion-modal.js"></script>
    <script src="./assets/js/lang/lang-donar.js"></script>
    <script src="./assets/js/lang/lang-quienes-somos-detalles.js"></script>
    
    <!-- Scripts por Sección -->
    <script src="./assets/js/hero.js"></script>
    <script src="./assets/js/quienes-somos.js"></script>
    <script src="./assets/js/politicas.js"></script>
    <script src="./assets/js/ninos.js"></script>
    <script src="./assets/js/mujeres.js"></script>
    <script src="./assets/js/impacto.js"></script>
    <script src="./assets/js/informes.js"></script>
    <script src="./assets/js/pinceladas.js"></script>
    <script src="./assets/js/podcast.js"></script>
    <script src="./assets/js/noticias.js"></script>
    <script src="./assets/js/donacion-modal.js"></script>
    <script src="./assets/js/modal-mujeres.js"></script>
    <script src="./assets/js/modal-ninos.js"></script>
    
    <!-- Aplicar traducciones después de cargar todo -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.CODEHCIU_I18N) {
                window.CODEHCIU_I18N.applyTranslations();
            }
        });
    </script>
    
<!-- ========================================== -->
<!-- MODAL DE BIENVENIDA - DONACIÓN            -->
<!-- ========================================== -->
<div id="donationModal" class="donation-modal">
    <div class="donation-modal-content">
        <!-- Botón cerrar -->
        <button class="donation-modal-close" id="closeDonationModal">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Contenido del modal con imagen de fondo -->
        <div class="donation-modal-body">
            <div class="donation-modal-bg-image"></div>
            <div class="donation-modal-overlay">
                <div class="donation-modal-info">
                    <!-- Título: el <h2> NO tiene data-i18n, solo el <span> interior -->
                    <h2 ata-i18n="donation_title">
                        ¡TU APOYO
                        <span data-i18n="donation_title_span" class="highlight">TRANSFORMA VIDAS EN COMUNIDADES VULNERABLES!</span>
                    </h2>
                    
                    <p data-i18n="donation_description">Detrás de cada acompañamiento psicosocial, asistencia legal y espacio seguro para niñas, niños, adolescentes y mujeres sobrevivientes de violencia, hay personas comprometidas como tú.</p>
                    
                    <h4 data-i18n="donation_impact">HAZ LA DIFERENCIA HOY</h4>
                    
                    <p data-i18n="donation_note">Cada aporte fortalece la defensa de la dignidad humana.</p>
                    
                    <!-- Botón: el <a> NO tiene data-i18n, solo el <span> interior -->
                    <a href="./donar.php" class="btn-donate-primary">
                        <i class="fas fa-heart"></i> <span data-i18n="donate_btn">Quiero Donar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal de Donación 
    <div id="donationModal" class="donation-modal">
        <div class="donation-modal-content">
            <button class="donation-modal-close" id="closeDonationModal">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="donation-modal-body">
                <div class="donation-modal-image">
                    <img src="./assets/img/CODEHCIU_LOGO.png" alt="Ayúdanos a ayudar">
                    <div class="donation-image-overlay">
                        <span class="donation-badge">💛 Juntos podemos</span>
                    </div>
                </div>
                <div class="donation-modal-info">
                    <h2>¡Tu apoyo <span>marca la diferencia</span>!</h2>
                    <p class="donation-message">
                        En CODEHCIU trabajamos todos los días para proteger a niños, niñas, adolescentes 
                        y mujeres sobrevivientes de violencia. <strong>Tu donación</strong> nos permite 
                        brindar apoyo psicosocial, asesoría legal y acompañamiento a quienes más lo necesitan.
                    </p>
                    <div class="donation-impact">
                        <div class="impact-item">
                            <i class="fas fa-child"></i>
                            <span>Niños protegidos</span>
                        </div>
                        <div class="impact-item">
                            <i class="fas fa-female"></i>
                            <span>Mujeres apoyadas</span>
                        </div>
                        <div class="impact-item">
                            <i class="fas fa-hand-holding-heart"></i>
                            <span>Familias fortalecidas</span>
                        </div>
                    </div>
                    <div class="donation-buttons">
                        <a href="./donar.php" class="btn-donate-primary">
                            <i class="fas fa-heart"></i> Quiero Donar
                        </a>
                        <button class="btn-donate-secondary" id="closeDonationModalBtn">
                            <i class="fas fa-times"></i> Cerrar
                        </button>
                    </div>
                    <p class="donation-note">
                        <i class="fas fa-lock"></i> Tus datos están seguros y protegidos.
                    </p>
                </div>
            </div>
        </div>
    </div> -->
</body>
</html>