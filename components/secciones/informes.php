<!-- SECCIÓN: INFORMES DE PROYECTOS -->
<section id="informes" class="section informes-section">
    <div class="container">
        <div class="informes-header">
            <h2>Informes de <span>proyectos culminados</span></h2>
            <p class="section-subtitle">Conoce los resultados y el impacto de nuestros proyectos finalizados</p>
        </div>

        <div class="informes-grid" id="informesGrid">
            <!-- Los informes se cargarán dinámicamente con JavaScript -->
        </div>

        <!-- Loading -->
        <div class="informes-loading" id="informesLoading">
            <div class="spinner"></div>
            <p>Cargando informes...</p>
        </div>

        <!-- Mensaje sin informes -->
        <div class="informes-empty" id="informesEmpty" style="display: none;">
            <i class="fas fa-file-pdf fa-3x"></i>
            <p>No hay informes disponibles en este momento.</p>
        </div>
    </div>
</section>

<!-- MODAL PARA VISUALIZAR PDF -->
<div id="pdfModal" class="modal-pdf">
    <div class="modal-pdf-content">
        <div class="modal-pdf-header">
            <h3 id="pdfTitle">Informe de Proyecto</h3>
            <div class="modal-pdf-actions">
                <button class="modal-pdf-btn" id="pdfDownloadBtn">
                    <i class="fas fa-download"></i> Descargar
                </button>
                <button class="modal-pdf-close" id="closePdfModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="modal-pdf-body">
            <iframe id="pdfViewer" src="" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>
</div>