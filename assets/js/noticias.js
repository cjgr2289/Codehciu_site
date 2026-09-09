// ==========================================
// NOTICIAS - VERSIÓN SIMPLIFICADA
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    console.log('📰 Cargando sección de noticias...');

    // ==========================================
    // ELEMENTOS DEL DOM
    // ==========================================
    var grid = document.getElementById('noticiasGrid');
    var loading = document.getElementById('noticiasLoading');
    var empty = document.getElementById('noticiasEmpty');
    var modal = document.getElementById('noticiaModal');
    var modalBody = document.getElementById('noticiaModalBody');
    var closeBtn = document.getElementById('closeNoticiaModal');
    var backBtn = document.getElementById('backToNoticias');

    // ==========================================
    // FUNCIÓN PARA CARGAR NOTICIAS
    // ==========================================
    function cargarNoticias() {
        loading.classList.add('active');
        grid.innerHTML = '';
        empty.style.display = 'none';

        var apiUrl = '/CODEHCIU/api/noticias.php';

        fetch(apiUrl)
            .then(function(response) {
                if (!response.ok) {
                    throw new Error('Error en la respuesta: ' + response.status);
                }
                return response.json();
            })
            .then(function(noticias) {
                loading.classList.remove('active');

                if (!noticias || noticias.length === 0) {
                    empty.style.display = 'block';
                    return;
                }

                renderNoticias(noticias);
            })
            .catch(function(error) {
                console.error('❌ Error al cargar noticias:', error);
                loading.classList.remove('active');
                empty.style.display = 'block';
                empty.querySelector('p').textContent = 'Error al cargar las noticias. Por favor, intenta más tarde.';
            });
    }

    // ==========================================
    // FUNCIÓN PARA RENDERIZAR NOTICIAS - SIN RESUMEN
    // ==========================================
    function renderNoticias(noticias) {
        grid.innerHTML = '';

        noticias.forEach(function(noticia, index) {
            var card = document.createElement('div');
            card.className = 'noticia-card';

            var fecha = new Date(noticia.fecha);
            var fechaFormateada = fecha.toLocaleDateString('es-ES', {
                year: 'numeric',
                month: 'short',
                day: 'numeric'
            });

            var imagenUrl = noticia.imagen_url || '/CODEHCIU/assets/img/default-news.jpg';

            card.innerHTML = `
                <div class="noticia-card-image">
                    <img src="${imagenUrl}" alt="${noticia.titulo}" loading="lazy">
                    <div class="noticia-card-date-badge">
                        <i class="far fa-calendar-alt"></i> ${fechaFormateada}
                    </div>
                </div>
                <div class="noticia-card-content">
                    <h3>${noticia.titulo}</h3>
                    <button class="noticia-card-link" data-id="${noticia.id}">
                        Leer más <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            `;

            var link = card.querySelector('.noticia-card-link');
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var id = parseInt(this.getAttribute('data-id'));
                var noticiaData = noticias.find(function(n) {
                    return n.id === id;
                });
                if (noticiaData) {
                    abrirModal(noticiaData);
                }
            });

            grid.appendChild(card);
        });

        console.log('✅ ' + noticias.length + ' noticias cargadas');
    }

    // ==========================================
    // FUNCIÓN PARA ABRIR MODAL
    // ==========================================
    function abrirModal(noticia) {
        var fecha = new Date(noticia.fecha);
        var fechaFormateada = fecha.toLocaleDateString('es-ES', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });

        var contenidoHTML = '';
        if (noticia.contenido) {
            var parrafos = noticia.contenido.split('\n');
            parrafos.forEach(function(parrafo) {
                if (parrafo.trim()) {
                    contenidoHTML += '<p>' + parrafo.trim() + '</p>';
                }
            });
        } else {
            contenidoHTML = '<p>' + (noticia.resumen || 'Contenido no disponible.') + '</p>';
        }

        var imagenUrl = noticia.imagen_url || '/CODEHCIU/assets/img/default-news.jpg';

        modalBody.innerHTML = `
            <img src="${imagenUrl}" alt="${noticia.titulo}" class="noticia-destacada">
            <h1 class="noticia-titulo">${noticia.titulo}</h1>
            <div class="noticia-meta">
                <span><i class="far fa-calendar-alt"></i> ${fechaFormateada}</span>
                <span><i class="far fa-user"></i> CODEHCIU</span>
                <span><i class="far fa-clock"></i> ${fecha.toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' })}</span>
            </div>
            <div class="noticia-contenido">
                ${contenidoHTML}
            </div>
        `;

        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // ==========================================
    // FUNCIÓN PARA CERRAR MODAL
    // ==========================================
    function cerrarModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // ==========================================
    // EVENTOS DEL MODAL
    // ==========================================
    closeBtn.addEventListener('click', cerrarModal);
    backBtn.addEventListener('click', function(e) {
        e.preventDefault();
        cerrarModal();
        var noticiasSection = document.getElementById('noticias');
        if (noticiasSection) {
            var headerHeight = document.querySelector('header')?.offsetHeight || 0;
            var targetPosition = noticiasSection.offsetTop - headerHeight - 20;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });

    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            cerrarModal();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            cerrarModal();
        }
    });

    // ==========================================
    // INICIALIZAR
    // ==========================================
    cargarNoticias();

    console.log('📰 Sección de noticias inicializada');
});