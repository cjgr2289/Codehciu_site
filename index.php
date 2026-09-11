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
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Incluir navbar -->
    <?php include_once __DIR__ . '/components/navbar.php'; ?>
    
    <!-- Contenedor principal -->
    <main id="main-container">
        <!-- Contenido específico de la página de inicio -->
        <?php include_once __DIR__ . '/pages/inicio/index.php'; ?>
        
        <!-- Footer -->
        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </main>
    
    <!-- Scripts Globales -->
    <script src="./assets/js/nav.js"></script>
    
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
    
    <!-- Script específico de la página de inicio -->
    <?php
    $inicio_js_path = __DIR__ . '/pages/inicio/inicio.js';
    if (file_exists($inicio_js_path)) {
        echo '<script src="./pages/inicio/inicio.js"></script>';
    }
    ?>
    
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
                    <h2>¡TU APOYO <span>TRANSFORMA VIDAS EN COMUNIDADES</span> VULNERABLES!</h2>
                    <p>Detrás de cada acompañamiento psicosocial,<br> asistencia legal y espacio seguro para niñas, niños,<br> adolecentes y mujeres sobrevivientes de violencia, <br> hay personas comprometidas como tu.</p>
                    <h4>HAZ LA DIFERENCIA HOY</h4>
                    <p>cada aporte fortalece la defensa de<br> la dignidad humana.</p>
                    <a href="./donar.php" class="btn-donate-primary">
                        <i class="fas fa-heart"></i> Quiero Donar
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