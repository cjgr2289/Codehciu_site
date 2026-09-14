<!-- SECCIÓN: NOTICIAS -->
<section id="noticias" class="section noticias-section">
    <div class="container">
        <div class="noticias-header">
            <h2 data-i18n="news_title">Nuestras<span data-i18n="news_title_span">Noticias</span></h2>
            <p class="section-subtitle" data-i18n="news_subtitle">Mantente informado sobre nuestras actividades, logros y eventos más recientes</p>
        </div>

        <!-- Grid de noticias -->
        <div class="noticias-grid" id="noticiasGrid">
            <!-- Las noticias se cargarán aquí dinámicamente -->
        </div>

        <!-- Loading -->
        <div class="noticias-loading" id="noticiasLoading">
            <div class="spinner"></div>
            <p data-i18n="news_loading">Cargando noticias...</p>
        </div>

        <!-- Mensaje sin noticias -->
        <div class="noticias-empty" id="noticiasEmpty" style="display: none;">
            <i class="fas fa-newspaper fa-3x"></i>
            <p data-i18n="news_empty">No hay noticias disponibles en este momento.</p>
        </div>
    </div>
</section>

<!-- MODAL DE NOTICIA COMPLETA -->
<div id="noticiaModal" class="modal-noticia">
    <div class="modal-noticia-content">
        <button class="modal-noticia-close" id="closeNoticiaModal">
            <i class="fas fa-times"></i>
        </button>

        <button class="modal-noticia-back" id="backToNoticias">
            <i class="fas fa-arrow-left"></i> <span data-i18n="news_back">Volver a Noticias</span>
        </button>

        <div class="modal-noticia-body" id="noticiaModalBody">
            <!-- Se carga dinámicamente -->
        </div>
    </div>
</div>