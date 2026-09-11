<!-- SECCIÓN: PINCELADAS DE VIDA -->
<section id="pinceladas" class="section pinceladas-section">
    <div class="container">
        <div class="pinceladas-header">
            <h2>Pinceladas <span>de mi vida</span></h2>
            <p class="section-subtitle">Historias de superación y esperanza que inspiran</p>
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
                    <h4>¿Quieres conocer más historias inspiradoras?</h4>
                    <p>Descarga el libro completo "Pinceladas de Vida - Sanando con Arte"</p>
                </div>
                <a href="./assets/docs/PINCELADAS_DE_VIDA_SANANDO_CON_ARTE.pdf" class="btn-download-enhanced" download>
                    <i class="fas fa-download"></i> Descargar PDF
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
            <h2 class="modal-author-name" id="modalTitle">Nombre del Autor</h2>
            <p class="modal-art-story" id="modalStory">Aquí va la historia de la obra. Puedes escribir un texto largo y se ajustará perfectamente al espacio disponible.</p>
        </div>
    </div>
</div>