// ==========================================
// INFORMES DE PROYECTOS
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    console.log('Cargando sección de informes...');

    // ==========================================
    // DATOS DE LOS INFORMES
    // ==========================================
    const informes = [
        {
            id: 1,
            titulo: 'Informe: Dignidad humana en Bolívar',
            descripcion: 'Promovemos, defendemos y salvaguardamos la dignidad humana en toda su dimensión en el estado Bolívar, con especial atención a las poblaciones más vulnerables.',
            fecha: '15 de Junio, 2025',
            categoria: 'Derechos Humanos',
            archivo: 'assets/docs/INF01_INFORME ESTRATÉGICO-2025-CODEHCIU.pdf',
            icono: 'fa-people-group'
        },
        {
            id: 2,
            titulo: 'Informe: Protección de la niñez y adolescencia en comunidades vulnerables del estado Bolívar.',
            descripcion: 'El proyecto, llevado a cabo por CODEHCIU en consorcio con Save the Children e International Medical Corps (IMC), tuvo lugar entre agosto de 2024 y marzo de 2026.',
            fecha: '30 de Marzo, 2026',
            categoria: 'Niñez y Adolescencia',
            archivo: 'assets/docs/INF02_Informe-de-Impacto-Estrategico CODEHCIU - SAVE 2026.pdf',
            icono: 'fa-child'
        },
        {
            id: 3,
            titulo: 'Informe: Red de Movilizadores Comunitarios de Protección (2025- 2026)',
            descripcion: 'En territorios caracterizados por la retracción de servicios públicos, dinámicas complejas de migración minera y barreras geográficas significativas en el estado Bolívar, la protección efectiva de los derechos humanos requiere del fortalecimiento endógeno de las propias comunidades.',
            fecha: '01 de Agosto, 2026',
            categoria: 'Institucional',
            archivo: 'assets/docs/INF03_ Especializado en Movilizadores Comunitarios (CODEHCIU).pdf',
            icono: 'fa-building'
        },
        {
            id: 4,
            titulo: 'Informe: Prevención y respuesta frente a la violencia, protección de la niñez, prevención de la trata de personas y salud mental en Bolívar',
            descripcion: 'Resumen ejecutivo de las actividades, logros y metas alcanzadas por la organización durante el año 2024.',
            fecha: '01 de diciembre, 2025',
            categoria: 'Institucional',
            archivo: 'assets/docs/INF04_INFORME OIM PARA WEB DEFINITIVO.pdf',
            icono: 'fa-child'
        },
        {
            id: 5,
            titulo: 'Informe: Ideación Suicida en Comunidades Vulnerables del Estado Bolívar',
            descripcion: 'El Estado Bolívar enfrenta una emergencia humanitaria que afecta profundamente la salud mental de sus comunidades más vulnerables.',
            fecha: '01 de Enero, 2025',
            categoria: 'Institucional',
            archivo: 'assets/docs/INF05_Ideacion-Suicida_WEB-en-Comunidades-Vulnerables-del-Estado-Bolivar.pdf',
            icono: 'fa-female'
        },
        {
            id: 6,
            titulo: 'Informe: ANALISIS DE BRECHA DE RESPUESTA Y CAPACIDADES DE ATENCIÓN PSICOSOCIAL',
            descripcion: 'sistematiza la intervención en Salud Mental y Apoyo Psicosocial (SMAPS) liderada por el Equipo de Respuesta en el estado Bolívar durante el período abril – noviembre 2025.',
            fecha: '01 de Noviembre, 2025',
            categoria: 'Institucional',
            archivo: 'assets/docs/INF06_ANALISIS DE BRECHA DE RESPUESTA Y CAPACIDADES DE ATENCIÓN PSICOSOCIAL. ESTADO BOLIVAR 2025.pdf',
            icono: 'fa-people-group'
        }
    ];

    // ==========================================
    // ELEMENTOS DEL DOM
    // ==========================================
    var grid = document.getElementById('informesGrid');
    var loading = document.getElementById('informesLoading');
    var empty = document.getElementById('informesEmpty');
    var modal = document.getElementById('pdfModal');
    var pdfViewer = document.getElementById('pdfViewer');
    var pdfTitle = document.getElementById('pdfTitle');
    var closeBtn = document.getElementById('closePdfModal');
    var downloadBtn = document.getElementById('pdfDownloadBtn');
    var pdfFileUrl = '';

    // ==========================================
    // FUNCIÓN PARA RENDERIZAR INFORMES
    // ==========================================
    function renderizarInformes() {
        loading.classList.add('active');
        grid.innerHTML = '';
        empty.style.display = 'none';

        // Simular carga (en producción sería una llamada a API)
        setTimeout(function() {
            loading.classList.remove('active');

            if (!informes || informes.length === 0) {
                empty.style.display = 'block';
                return;
            }

            informes.forEach(function(informe, index) {
                var card = document.createElement('div');
                card.className = 'informe-card';
                card.dataset.index = index;

                card.innerHTML = `
                    <div class="informe-card-icon">
                        <i class="fas ${informe.icono || 'fa-file-pdf'}"></i>
                        <span class="informe-badge">
                            <i class="fas fa-file-pdf"></i> PDF
                        </span>
                    </div>
                    <div class="informe-card-content">
                        <h3>${informe.titulo}</h3>
                        <p class="informe-descripcion">${informe.descripcion}</p>
                        <div class="informe-meta">
                            <span><i class="fas fa-calendar-alt"></i> ${informe.fecha}</span>
                            <span><i class="fas fa-tag"></i> ${informe.categoria}</span>
                        </div>
                        <div class="informe-actions">
                            <button class="btn-informe btn-informe-primary btn-ver-pdf" data-pdf="${informe.archivo}" data-titulo="${informe.titulo}">
                                <i class="fas fa-eye"></i> Ver PDF
                            </button>
                            <a href="${informe.archivo}" class="btn-informe btn-informe-secondary" download>
                                <i class="fas fa-download"></i> Descargar
                            </a>
                        </div>
                    </div>
                `;

                // Evento para ver PDF
                var verBtn = card.querySelector('.btn-ver-pdf');
                verBtn.addEventListener('click', function() {
                    var pdfUrl = this.getAttribute('data-pdf');
                    var titulo = this.getAttribute('data-titulo');
                    abrirPDF(pdfUrl, titulo);
                });

                grid.appendChild(card);
            });

            console.log('✅ ' + informes.length + ' informes cargados');
        }, 800);
    }

    // ==========================================
    // FUNCIÓN PARA ABRIR PDF
    // ==========================================
    function abrirPDF(url, titulo) {
        pdfFileUrl = url;
        pdfTitle.textContent = titulo || 'Informe de Proyecto';
        pdfViewer.src = url;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        console.log('📄 Abriendo PDF:', url);
    }

    // ==========================================
    // FUNCIÓN PARA CERRAR MODAL
    // ==========================================
    function cerrarPDF() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        // Limpiar el iframe para detener la carga
        setTimeout(function() {
            pdfViewer.src = '';
        }, 300);
        console.log('📄 PDF cerrado');
    }

    // ==========================================
    // FUNCIÓN PARA DESCARGAR PDF
    // ==========================================
    function descargarPDF() {
        if (pdfFileUrl) {
            var link = document.createElement('a');
            link.href = pdfFileUrl;
            link.download = pdfFileUrl.split('/').pop();
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            console.log('📥 Descargando PDF:', pdfFileUrl);
        }
    }

    // ==========================================
    // EVENTOS DEL MODAL
    // ==========================================
    closeBtn.addEventListener('click', cerrarPDF);
    downloadBtn.addEventListener('click', descargarPDF);

    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            cerrarPDF();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            cerrarPDF();
        }
    });

    // ==========================================
    // INICIALIZAR
    // ==========================================
    renderizarInformes();

    console.log('📊 Sección de informes inicializada');
});
