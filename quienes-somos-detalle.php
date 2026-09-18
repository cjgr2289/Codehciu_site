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
    <link rel="stylesheet" href="assets/css/quienes-somos-detalle.css">
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
                            <img src="./assets/img/QSomosDetalles/QuienesSomos01.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item1.title">Equipo CODEHCIU</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item1.subtitle">Compromiso y vocación</small>
                            </div>
                        </div>
                        <!-- Imagen 2 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QSomosDetalles/QuienesSomos02.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item2.title">Trabajo en equipo</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item2.subtitle">Unidos por los derechos</small>
                            </div>
                        </div>
                        <!-- Imagen 3 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QSomosDetalles/QuienesSomos03.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item3.title">Acción comunitaria</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item3.subtitle">Transformando vidas</small>
                            </div>
                        </div>
                        <!-- Imagen 4 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QSomosDetalles/QuienesSomos04.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item4.title">Liderazgo femenino</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item4.subtitle">85% mujeres</small>
                            </div>
                        </div>
                        <!-- Imagen 5 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QSomosDetalles/QuienesSomos05.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item5.title">Compromiso social</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item5.subtitle">Defendiendo derechos</small>
                            </div>
                        </div>
                        <!-- Imagen 6 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/QSomosDetalles/QuienesSomos06.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item6.title">Comunidad CODEHCIU</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item6.subtitle">Juntos por un futuro mejor</small>
                            </div>
                        </div>
                        <!-- Imagen 7 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/5 FOTO DE FONDO PINCELADAS DE MI VIDA.webp" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item7.title">Resiliencia comunitaria</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item7.subtitle">Fortalecimiento social</small>
                            </div>
                        </div>
                        <!-- Imagen 8 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/apoyo-psicosocial.webp" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item8.title">Educación y derechos</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item8.subtitle">Conocimiento para todos</small>
                            </div>
                        </div>
                        <!-- Imagen 9 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/gestion-casos.webp" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item9.title">Empoderamiento</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item9.subtitle">Mujeres transformando</small>
                            </div>
                        </div>
                        <!-- Imagen 10 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/ninezProtegida.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item10.title">Niñez protegida</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item10.subtitle">Futuro seguro</small>
                            </div>
                        </div>
                        <!-- Imagen 11 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/JusticiaSocial.jpg" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item11.title">Justicia social</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item11.subtitle">Derechos para todos</small>
                            </div>
                        </div>
                        <!-- Imagen 12 -->
                        <div class="mosaic-item">
                            <img src="./assets/img/Informes.webp" alt="Equipo CODEHCIU">
                            <div class="mosaic-overlay">
                                <span data-i18n="quienes-somos-detalle.gallery.item12.title">CODEHCIU</span>
                                <small data-i18n="quienes-somos-detalle.gallery.item12.subtitle">Defendiendo derechos</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha - 70% -->
                <div class="quienes-somos-right">
                    <h1 data-i18n="quienes-somos-detalle.title">Quiénes <span data-i18n="quienes-somos-detalle.title.span">Somos</span></h1>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: INTRODUCCIÓN                     -->
                    <!-- ========================================== -->
                    <div class="seccion-intro">
                        <span class="destacado" data-i18n="quienes-somos-detalle.intro.p1-span">CODEHCIU</span>    
                        <p data-i18n="quienes-somos-detalle.intro.p1"> es una organización no gubernamental venezolana, local y liderada en un ,</p>
                        <span class="destacado" data-i18n="quienes-somos-detalle.intro.p1-percentage"> 85% por mujeres</span>
                        <p data-i18n="quienes-somos-detalle.intro.p1-p"> dedicada desde </p>
                        <span class="destacado" data-i18n="quienes-somos-detalle.intro.p1-year">2015</span>
                        <p data-i18n="quienes-somos-detalle.intro.p1-description"> a la defensa y promoción de los derechos humanos en el estado Bolívar.</p>
                    </div>
                    <div class="seccion-intro">
                        <p data-i18n="quienes-somos-detalle.intro.p2-01">
                            Brindamos respuesta integral a mujeres sobrevivientes de violencia, niñas, 
                            niños y adolescentes en situación de vulnerabilidad, mediante acompañamiento 
                            legal, apoyo psicosocial, gestión de casos y asistencias no monetarias. 
                            Bajo principios humanitarios de imparcialidad, independencia, neutralidad y confidencialidad, 
                            y el compromiso de, 
                        </p>
                        <span data-i18n="quienes-somos-detalle.intro.p2-02" class="destacado">"no hacer daño"</span>
                        <p data-i18n="quienes-somos-detalle.intro.p2-03">promovemos la igualdad de género, la rendición de cuentas y la cultura de paz en entornos complejos.</p>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: MISIÓN, VISIÓN Y VALORES        -->
                    <!-- ========================================== -->
                    <div class="seccion-mvv">
                        <h2 data-i18n="quienes-somos-detalle.mvv.title">Misión, Visión y Valores</h2>
                        <div class="mvv-grid">
                            <!-- Misión -->
                            <div class="mvv-card">
                                <span class="mvv-icon"><i class="fas fa-bullseye"></i></span>
                                <h3 data-i18n="quienes-somos-detalle.mvv.mission.title">Misión</h3>
                                <p data-i18n="quienes-somos-detalle.mvv.mission.text">
                                    Construir resiliencia sistémica en las comunidades, transformando las estructuras de vulnerabilidad en fortalezas permanentes.
                                </p>
                            </div>
                            <!-- Visión -->
                            <div class="mvv-card">
                                <span class="mvv-icon"><i class="fas fa-eye"></i></span>
                                <h3 data-i18n="quienes-somos-detalle.mvv.vision.title">Visión</h3>
                                <p data-i18n="quienes-somos-detalle.mvv.vision.text">
                                    Un mundo sin violencia, donde las comunidades posean el poder, los sistemas y la unidad para garantizar su propia dignidad, seguridad, bienestar y para promover sus derechos.
                                </p>
                            </div>
                            <!-- Valores (resumen) -->
                            <div class="mvv-card">
                                <span class="mvv-icon"><i class="fas fa-hand-holding-heart"></i></span>
                                <h3 data-i18n="quienes-somos-detalle.mvv.values.title">Valores</h3>
                                <p data-i18n="quienes-somos-detalle.mvv.values.text">
                                    Respeto por la dignidad de la persona, compromiso con la justicia social, integridad, trabajo colaborativo, transparencia y excelencia en la gestión.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: VALORES DETALLADOS               -->
                    <!-- ========================================== -->
                    <div class="seccion-valores-detalle">
                        <h2 data-i18n="quienes-somos-detalle.valores.title">Nuestros Valores</h2>
                        <div class="valores-grid">
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-user-check"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.valores.dignity.title">Respeto por la dignidad</h4>
                                <p data-i18n="quienes-somos-detalle.valores.dignity.text">Reconocemos y valoramos la dignidad inherente de cada persona</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-scale-balanced"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.valores.justice.title">Justicia social</h4>
                                <p data-i18n="quienes-somos-detalle.valores.justice.text">Compromiso firme con la equidad y la justicia para todos</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-shield-halved"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.valores.integrity.title">Integridad</h4>
                                <p data-i18n="quienes-somos-detalle.valores.integrity.text">Actuamos con honestidad y coherencia en todo momento</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-handshake"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.valores.collaboration.title">Trabajo colaborativo</h4>
                                <p data-i18n="quienes-somos-detalle.valores.collaboration.text">Construimos juntos, fortaleciendo alianzas y sinergias</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-eye"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.valores.transparency.title">Transparencia</h4>
                                <p data-i18n="quienes-somos-detalle.valores.transparency.text">Actuamos con claridad y apertura en todas nuestras acciones</p>
                            </div>
                            <div class="valor-item">
                                <div class="valor-icon"><i class="fas fa-medal"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.valores.excellence.title">Excelencia en la gestión</h4>
                                <p data-i18n="quienes-somos-detalle.valores.excellence.text">Buscamos la mejora continua y la calidad en todo lo que hacemos</p>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: PILARES DE ACCIÓN                -->
                    <!-- ========================================== -->
                    <div class="seccion-pilares">
                        <h2 data-i18n="quienes-somos-detalle.pilares.title">Nuestros Pilares de Acción</h2>
                        <div class="pilares-grid">
                            <div class="pilar-card">
                                <div class="pilar-icon"><i class="fas fa-female"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.pilares.gender.title">Enfoque de Género y Derechos</h4>
                                <p data-i18n="quienes-somos-detalle.pilares.gender.text">Equidad e inclusión en todas las fases de intervención, sin excepción.</p>
                            </div>
                            <div class="pilar-card">
                                <div class="pilar-icon"><i class="fas fa-clipboard-list"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.pilares.accountability.title">Rendición de Cuentas</h4>
                                <p data-i18n="quienes-somos-detalle.pilares.accountability.text">Transparencia plena con las comunidades acompañadas y organizaciones aliadas.</p>
                            </div>
                            <div class="pilar-card">
                                <div class="pilar-icon"><i class="fas fa-handshake"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.pilares.communication.title">Comunicación y Valores</h4>
                                <p data-i18n="quienes-somos-detalle.pilares.communication.text">Promoción activa de la cultura de paz y defensa de los derechos fundamentales.</p>
                            </div>
                            <div class="pilar-card">
                                <div class="pilar-icon"><i class="fas fa-shield-alt"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.pilares.noHarm.title">No hacer daño</h4>
                                <p data-i18n="quienes-somos-detalle.pilares.noHarm.text">Evitamos cualquier acción que cause perjuicio, sufrimiento o daño a otros</p>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: PRINCIPIOS HUMANITARIOS          -->
                    <!-- ========================================== -->
                    <div class="seccion-principios">
                        <h2 data-i18n="quienes-somos-detalle.principios.title">Principios Humanitarios</h2>
                        <div class="principios-grid">
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-heart"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.principios.humanity.title">Humanidad</h4>
                                <p data-i18n="quienes-somos-detalle.principios.humanity.text">Priorizamos la dignidad humana <br> sin distinción</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-balance-scale"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.principios.impartiality.title">Imparcialidad</h4>
                                <p data-i18n="quienes-somos-detalle.principios.impartiality.text">Respondemos según necesidades reales, sin sesgos ni discriminación</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-flag"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.principios.neutrality.title">Neutralidad</h4>
                                <p data-i18n="quienes-somos-detalle.principios.neutrality.text">No tomamos partido de orden político, racial,<br> religioso o de otra índole</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-user-shield"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.principios.confidentiality.title">Confidencialidad</h4>
                                <p data-i18n="quienes-somos-detalle.principios.confidentiality.text">Estamos obligados a proteger toda la información personal, sensible o estrategica para garantizar las seguridad, la intimidad y la dignidad de las personas afectadas.</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-hand-holding-heart"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.principios.noHarm.title">No hacer daño</h4>
                                <p data-i18n="quienes-somos-detalle.principios.noHarm.text">Evitamos cualquier acción que cause perjuicio, sufrimiento o daño a otros</p>
                            </div>
                            <div class="principio-card">
                                <div class="principio-icon"><i class="fas fa-users"></i></div>
                                <h4 data-i18n="quienes-somos-detalle.principios.independence.title">Independencia</h4>
                                <p data-i18n="quienes-somos-detalle.principios.independence.text">Actuamos con autonomía operativa frente <br> a cualquier actor externo</p>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== -->
                    <!-- SECCIÓN: EJES DE ACCIÓN                   -->
                    <!-- ========================================== -->
                    <div class="seccion-ejes">
                        <h2 data-i18n="quienes-somos-detalle.ejes.title">Ejes de Acción</h2>
                        <div class="ejes-grid">
                            <div class="eje-card">
                                <h4 data-i18n="quienes-somos-detalle.ejes.protection.title">Protección Integral NNA</h4>
                                <p data-i18n="quienes-somos-detalle.ejes.protection.text">Gestión de casos, contención psicosocial, espacios seguros y asistencia humanitaria para niñas, niños y adolescentes.</p>
                            </div>
                            <div class="eje-card">
                                <h4 data-i18n="quienes-somos-detalle.ejes.women.title">Atención a Mujeres VBG</h4>
                                <p data-i18n="quienes-somos-detalle.ejes.women.text">Acompañamiento legal, primeros auxilios psicológicos, empoderamiento socioeconómico y asistencia no monetaria.</p>
                            </div>
                            <div class="eje-card">
                                <h4 data-i18n="quienes-somos-detalle.ejes.community.title">Fortalecimiento Comunitario</h4>
                                <p data-i18n="quienes-somos-detalle.ejes.community.text">Trabajo con familias, escuelas y líderes comunitarios para activar redes de protección y alerta temprana.</p>
                            </div>
                            <div class="eje-card">
                                <h4 data-i18n="quienes-somos-detalle.ejes.incidence.title">Incidencia Territorial</h4>
                                <p data-i18n="quienes-somos-detalle.ejes.incidence.text">Presencia activa en contextos de alta vulnerabilidad, promoviendo derechos y cultura de paz en el estado Bolívar.</p>
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
    <script src="./assets/js/lang.js"></script>
    <script src="./assets/js/lang/lang-quienes-somos-detalles.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.CODEHCIU_I18N) {
                window.CODEHCIU_I18N.applyTranslations();
            }
        });
    </script>
</body>
</html>