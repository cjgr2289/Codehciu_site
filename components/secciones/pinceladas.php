<!-- SECCIÓN: PINCELADAS DE VIDA -->
<section id="pinceladas" class="section pinceladas-section">
    <div class="container">
        <div class="pinceladas-header">
            <h2 data-i18n="pinceladas_title">Pinceladas<span data-i18n="pinceladas_title_span">de mi vida</span></h2>
            <p class="section-subtitle" data-i18n="pinceladas_subtitle">Historias de superación y esperanza que inspiran</p>
        </div>

        <!-- Botón "Conoce más" justo debajo del header -->
        <div class="pinceladas-info-btn-row">
            <button class="btn-info-enhanced" data-open-pinceladas-info>
                <i class="fas fa-circle-info"></i>
                <span data-i18n="pinceladas_info_btn">Conoce más</span>
            </button>
        </div>

        <!-- Carrusel -->
        <div class="pinceladas-carousel-enhanced">
            <div class="carousel-main-container">
                <button class="carousel-btn prev-btn" aria-label="Anterior">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="carousel-track-container">
                    <div class="carousel-track-enhanced" id="pinceladasTrack">
                        <!-- Las imágenes se cargarán con JavaScript -->
                    </div>
                </div>

                <button class="carousel-btn next-btn" aria-label="Siguiente">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators" id="pinceladasIndicators">
                <!-- Generados por JavaScript -->
            </div>

            <div class="carousel-counter" id="pinceladasCounter">
                <span id="currentSlide">1</span> / <span id="totalSlides">0</span>
            </div>
        </div>

        <!-- Botón de descarga -->
        <div class="download-section-enhanced">
            <div class="download-content">
                <div class="download-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="download-text">
                    <h4 data-i18n="pinceladas_download">¿Quieres conocer más historias inspiradoras?</h4>
                    <p data-i18n="pinceladas_download_desc">Descarga el libro completo "Pinceladas de Vida - Sanando con Arte"</p>
                </div>
                <a href="./assets/docs/PINCELADAS_DE_VIDA_SANANDO_CON_ARTE.pdf" class="btn-download-enhanced" download>
                    <i class="fas fa-download"></i> <span data-i18n="pinceladas_btn">Descargar PDF</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modal para imagen completa -->
<div id="pinceladasModal" class="modal-enhanced">
    <div class="modal-content-enhanced">
        <button class="modal-close-btn" id="closeModalBtn">
            <i class="fas fa-times"></i>
        </button>

        <div class="modal-image-wrapper">
            <img id="modalImage" src="" alt="Historia de vida">
            <button class="modal-nav-btn-prev" id="prevModalBtn">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="modal-nav-btn-next" id="nextModalBtn">
                <i class="fas fa-chevron-right"></i>
            </button>
            <div class="modal-position-indicator">
                <span id="modalPosition">1</span> / <span id="modalTotal">0</span>
            </div>
        </div>

        <div class="modal-info-wrapper">
            <h2 class="modal-author-name" id="modalTitle" data-i18n="pinceladas_modal_title">Nombre del Autor</h2>
            <p class="modal-art-story" id="modalStory" data-i18n="pinceladas_modal_story">Aquí va la historia de la obra. Puedes escribir un texto largo y se ajustará perfectamente al espacio disponible.</p>
        </div>
    </div>
</div>

<!-- Modal: Pinceladas de mi vida (información completa) -->
<div id="pinceladasInfoModal" class="pinceladas-info-modal">
    <div class="pinceladas-info-modal__content" role="dialog" aria-modal="true" aria-labelledby="pinceladasInfoTitle">
        <button class="pinceladas-info-modal__close" id="closePinceladasInfoModal" aria-label="Cerrar">
            <i class="fas fa-times"></i>
        </button>

        <header class="pinceladas-info-modal__header">
            <span class="pinceladas-info-modal__badge">
                <i class="fas fa-paint-brush"></i>
                <span data-i18n="pinceladas_info_badge">Arteterapia & Dignidad</span>
            </span>
            <h2 id="pinceladasInfoTitle" class="pinceladas-info-modal__title">
                <span data-i18n="pinceladas_info_title">Pinceladas</span>
                <span class="accent" data-i18n="pinceladas_info_title_span">de mi vida</span>
            </h2>
        </header>

        <div class="pinceladas-info-modal__body">
            <p class="pinceladas-info-modal__lead" data-i18n="pinceladas_info_lead">
                Es una iniciativa y espacio de reconstrucción narrativa promovido por CODEHCIU, diseñado para que mujeres y adolescentes sobrevivientes de violencia puedan relatar sus historias de vida desde un enfoque de dignidad, resiliencia y sanación a través de la arteterapia. En este camino, resulta indispensable la colaboración del <em>taller de arte Paperstina</em>, cuya alianza estratégica e implicación técnica en todas y cada una de las ediciones ha sido el motor creativo que permite traducir el proceso terapéutico en expresiones plásticas con significado.
            </p>

            <div class="pinceladas-info-modal__cards">
                <article class="pinceladas-info-modal__card">
                    <div class="pinceladas-info-modal__card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 data-i18n="pinceladas_info_obj_title">Objetivo principal</h3>
                    <p data-i18n="pinceladas_info_obj_text">
                        Transformar relatos de dolor y vulnerabilidad en narrativas de empoderamiento, permitiendo a las participantes reconocer su agencia, recuperar su voz y resignificar sus vivencias. La facilitación estética de Paperstina brinda los recursos artísticos necesarios para que cada trazo y color se conviertan en herramientas eficaces de liberación y autoafirmación.
                    </p>
                </article>

                <article class="pinceladas-info-modal__card">
                    <div class="pinceladas-info-modal__card-icon">
                        <i class="fas fa-hands-holding-circle"></i>
                    </div>
                    <h3 data-i18n="pinceladas_info_tec_title">Enfoque técnico y organizacional</h3>
                    <p data-i18n="pinceladas_info_tec_text">
                        Se integra dentro de los programas de atención psicosocial y protección integral de la organización. Mediante el trabajo conjunto entre el equipo psicosocial de CODEHCIU y la guía artística de Paperstina, se implementan metodologías participativas y creativas que respetan rigurosamente los principios de No Hacer Daño, confidencialidad y salvaguardas.
                    </p>
                </article>

                <article class="pinceladas-info-modal__card pinceladas-info-modal__card--wide">
                    <div class="pinceladas-info-modal__card-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 data-i18n="pinceladas_info_imp_title">Impacto</h3>
                    <p data-i18n="pinceladas_info_imp_text">
                        Ayuda a visibilizar las realidades locales del estado Bolívar y refuerza el proceso de acompañamiento legal, psicosocial y comunitario que brinda la organización, visibilizando la transformación de las participantes a través de obras que testimonian su proceso de sanación.
                    </p>
                </article>
            </div>
        </div>
    </div>
</div>