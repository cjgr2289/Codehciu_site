<?php
// /quienes-somos-detalle.php
$current_page = 'quienes-somos';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - CODEHCIU</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
    
    <!-- CSS Global -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/variables.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS de la página -->
    <link rel="stylesheet" href="./assets/css/quienes-somos-detalle.css">
</head>
<body>
    <!-- Incluir navbar -->
    <?php include_once __DIR__ . '/components/navbar.php'; ?>

    <!-- Contenido principal -->
    <main class="quienes-somos-detalle">
        <div class="container">
            <div class="quienes-somos-wrapper">
                <!-- Columna Izquierda - 30% -->
                <div class="quienes-somos-left">
                    <div class="mosaic-gallery">
                        <!-- Imagen 1 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QuienesSomos01.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Equipo CODEHCIU</span>
                                <small>Compromiso y vocación</small>
                            </div>
                        </div>
                        <!-- Imagen 2 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QuienesSomos02.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Trabajo en equipo</span>
                                <small>Unidos por los derechos</small>
                            </div>
                        </div>
                        <!-- Imagen 3 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QuienesSomos03.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Acción comunitaria</span>
                                <small>Transformando vidas</small>
                            </div>
                        </div>
                        <!-- Imagen 4 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QuienesSomos04.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Liderazgo femenino</span>
                                <small>85% mujeres</small>
                            </div>
                        </div>
                        <!-- Imagen 5 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QuienesSomos05.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Compromiso social</span>
                                <small>Defendiendo derechos</small>
                            </div>
                        </div>
                        <!-- Imagen 6 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QuienesSomos06.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Comunidad CODEHCIU</span>
                                <small>Juntos por un futuro mejor</small>
                            </div>
                        </div>
                        <!-- Imagen 7 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/5 FOTO DE FONDO PINCELADAS DE MI VIDA.webp" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Resiliencia comunitaria</span>
                                <small>Fortalecimiento social</small>
                            </div>
                        </div>
                        <!-- Imagen 8 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/apoyo-psicosocial.webp" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Educación y derechos</span>
                                <small>Conocimiento para todos</small>
                            </div>
                        </div>
                        <!-- Imagen 9 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/gestion-casos.webp" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Empoderamiento</span>
                                <small>Mujeres transformando</small>
                            </div>
                        </div>
                        <!-- Imagen 10 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/ninezProtegida.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Niñez protegida</span>
                                <small>Futuro seguro</small>
                            </div>
                        </div>
                        <!-- Imagen 11 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/JusticiaSocial.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>Justicia social</span>
                                <small>Derechos para todos</small>
                            </div>
                        </div>
                        <!-- Imagen 12 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/informes.webp" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span>CODEHCIU</span>
                                <small>Defendiendo derechos</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha - 70% -->
                <div class="quienes-somos-right">
                    <h1>Quiénes Somos</h1>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: INTRODUCCIÓN                     -->
                    <!-- ========================================== -->
                    <div class="seccion-intro">
                        <p>
                            <span class="destacado">CODEHCIU</span> es una organización no gubernamental venezolana, 
                            local y liderada en un <span class="destacado">85% por mujeres</span>, dedicada desde 
                            <span class="destacado">2015</span> a la defensa y promoción de los derechos humanos en el 
                            estado Bolívar.
                        </p>
                        <p>
                            Brindamos respuesta integral a mujeres sobrevivientes de violencia, niñas, niños y adolescentes 
                            en situación de vulnerabilidad, mediante acompañamiento legal, apoyo psicosocial, gestión de 
                            casos y asistencias no monetarias. Bajo principios humanitarios de imparcialidad, independencia, 
                            neutralidad y confidencialidad, y el compromiso de <span class="destacado">"no hacer daño"</span>, 
                            promovemos la igualdad de género, la rendición de cuentas y la cultura de paz en entornos complejos.
                        </p>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: MISIÓN, VISIÓN Y VALORES        -->
                    <!-- ========================================== -->
                    <div class="seccion-mvv">
                        <h2>Misión, Visión y Valores</h2>
                        <div class="mvv-grid">
                            <!-- Misión -->
                            <div class="mvv-card">
                                <span class="mvv-icon"><i class="fas fa-bullseye"></i></span>
                                <h3>Misión</h3>
                                <p>
                                    Construir resiliencia sistémica en las comunidades, transformando las estructuras de vulnerabilidad en fortalezas permanentes.
                                </p>
                            </div>
                            <!-- Visión -->
                            <div class="mvv-card">
                                <span class="mvv-icon"><i class="fas fa-eye"></i></span>
                                <h3>Visión</h3>
                                <p>
                                    Un mundo sin violencia, donde las comunidades posean el poder, los sistemas y la unidad para garantizar su propia dignidad, seguridad, bienestar y para promover sus derechos.
                                </p>
                            </div>
                            <!-- Valores (resumen) -->
                            <div class="mvv-card">
                                <span class="mvv-icon"><i class="fas fa-hand-holding-heart"></i></span>
                                <h3>Valores</h3>
                                <p>
                                    Respeto por la dignidad de la persona, compromiso con la justicia social, integridad, trabajo colaborativo, transparencia y excelencia en la gestión.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: VALORES DETALLADOS               -->
                    <!-- ========================================== -->
                    <div class="seccion-valores-detalle">
                        <h2>Nuestros Valores</h2>
                        <div class="valores-grid">
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-user-check"></i></div>
                                <h4>Respeto por la dignidad</h4>
                                <p>Reconocemos y valoramos la dignidad inherente de cada persona</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-scale-balanced"></i></div>
                                <h4>Justicia social</h4>
                                <p>Compromiso firme con la equidad y la justicia para todos</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-shield-halved"></i></div>
                                <h4>Integridad</h4>
                                <p>Actuamos con honestidad y coherencia en todo momento</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-handshake"></i></div>
                                <h4>Trabajo colaborativo</h4>
                                <p>Construimos juntos, fortaleciendo alianzas y sinergias</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-eye"></i></div>
                                <h4>Transparencia</h4>
                                <p>Actuamos con claridad y apertura en todas nuestras acciones</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-medal"></i></div>
                                <h4>Excelencia en la gestión</h4>
                                <p>Buscamos la mejora continua y la calidad en todo lo que hacemos</p>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: PILARES DE ACCIÓN                -->
                    <!-- ========================================== -->
                    <div class="seccion-pilares">
                        <h2>Nuestros Pilares de Acción</h2>
                        <div class="pilares-grid">
                            <div class="pilar-card">
                                <div class="pilar-icon"><i class="fas fa-female"></i></div>
                                <h4>Enfoque de Género y Derechos</h4>
                                <p>Equidad e inclusión en todas las fases de intervención, sin excepción.</p>
                            </div>
                            <div class="pilar-card">
                                <div class="pilar-icon"><i class="fas fa-clipboard-list"></i></div>
                                <h4>Rendición de Cuentas</h4>
                                <p>Transparencia plena con las comunidades acompañadas y organizaciones aliadas.</p>
                            </div>
                            <div class="pilar-card">
                                <div class="pilar-icon"><i class="fas fa-handshake"></i></div>
                                <h4>Comunicación y Valores</h4>
                                <p>Promoción activa de la cultura de paz y defensa de los derechos fundamentales.</p>
                            </div>
                            <div class="pilar-card">
                                <div class="pilar-icon"><i class="fas fa-shield-alt"></i></div>
                                <h4>Do No Harm</h4>
                                <p>Garantizamos que ninguna de nuestras acciones cause daño a las personas atendidas.</p>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: PRINCIPIOS HUMANITARIOS          -->
                    <!-- ========================================== -->
                    <div class="seccion-principios">
                        <h2>Principios Humanitarios</h2>
                        <div class="principios-grid">
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-heart"></i></div>
                                <h4>Humanidad</h4>
                                <p>Priorizamos la dignidad humana sin distinción</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-balance-scale"></i></div>
                                <h4>Imparcialidad</h4>
                                <p>Respondemos según necesidades reales, sin sesgos</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-flag"></i></div>
                                <h4>Neutralidad</h4>
                                <p>Sin tomar partido político, religioso o de otra índole</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-user-shield"></i></div>
                                <h4>Confidencialidad</h4>
                                <p>Resguardamos la identidad de cada persona atendida</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-hand-holding-heart"></i></div>
                                <h4>Do No Harm</h4>
                                <p>No causamos daño en ninguna de nuestras intervenciones</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-users"></i></div>
                                <h4>Independencia</h4>
                                <p>Autonomía operativa frente a cualquier actor externo</p>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: EJES DE ACCIÓN                   -->
                    <!-- ========================================== -->
                    <div class="seccion-ejes">
                        <h2>Ejes de Acción</h2>
                        <div class="ejes-grid">
                            <div class="eje-card">
                                <h4>Protección Integral NNA</h4>
                                <p>Gestión de casos, contención psicosocial, espacios seguros y asistencia humanitaria para niñas, niños y adolescentes.</p>
                            </div>
                            <div class="eje-card">
                                <h4>Atención a Mujeres VBG</h4>
                                <p>Acompañamiento legal, primeros auxilios psicológicos, empoderamiento socioeconómico y asistencia no monetaria.</p>
                            </div>
                            <div class="eje-card">
                                <h4>Fortalecimiento Comunitario</h4>
                                <p>Trabajo con familias, escuelas y líderes comunitarios para activar redes de protección y alerta temprana.</p>
                            </div>
                            <div class="eje-card">
                                <h4>Incidencia Territorial</h4>
                                <p>Presencia activa en contextos de alta vulnerabilidad, promoviendo derechos y cultura de paz en el estado Bolívar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Incluir footer -->
    <?php include_once __DIR__ . '/components/footer.php'; ?>

    <!-- Scripts -->
    <script src="./assets/js/nav.js"></script>
</body>
</html>