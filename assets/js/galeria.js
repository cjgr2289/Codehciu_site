// ==========================================
// GALERÍA - MEMORIAS DE ENCUENTROS
// ==========================================

document.addEventListener('DOMContentLoaded', function () {
    console.log('✅ galeria.js cargado');

    // ==========================================
    // CONFIGURACIÓN
    // ==========================================
    const imgPath = 'assets/img/galeria/';   // 👈 ruta base (sin barra duplicada)

    // ==========================================
    // BLOQUES DE CONTENIDO
    // Cada bloque agrupa 3 fotos y usa claves i18n
    // para subtítulo y descripción (definidas en lang-galeria.js).
    // ==========================================
    const bloques = [
        {
            subtitleKey: 'galeria_bloque1_subtitle',
            descriptionKey: 'galeria_bloque1_description',
            fotos: [
                { src: 'Galeria01.webp', alt: 'Exp. Pinceladas Teatro Sidor - 1' },
                { src: 'Galeria02.webp', alt: 'Exp. Pinceladas Teatro Sidor - 2' },
                { src: 'Galeria03.webp', alt: 'Exp. Pinceladas Teatro Sidor - 3' }
            ]
        },
        {
            subtitleKey: 'galeria_bloque2_subtitle',
            descriptionKey: 'galeria_bloque2_description',
            fotos: [
                { src: 'Galeria04.webp', alt: 'Taller de Arteterapia - 1' },
                { src: 'Galeria05.webp', alt: 'Taller de Arteterapia - 2' },
                { src: 'Galeria06.webp', alt: 'Taller de Arteterapia - 3' }
            ]
        },
        {
            subtitleKey: 'galeria_bloque3_subtitle',
            descriptionKey: 'galeria_bloque3_description',
            fotos: [
                { src: 'Galeria07.webp', alt: 'Presentación del libro - 1' },
                { src: 'Galeria08.webp', alt: 'Presentación del libro - 2' },
                { src: 'Galeria09.webp', alt: 'Presentación del libro - 3' }
            ]
        },
        {
            subtitleKey: 'galeria_bloque4_subtitle',
            descriptionKey: 'galeria_bloque4_description',
            fotos: [
                { src: 'Galeria10.webp', alt: 'Ministerio Público de Angostura - 1' },
                { src: 'Galeria11.webp', alt: 'Ministerio Público de Angostura - 2' },
                { src: 'Galeria12.webp', alt: 'Ministerio Público de Angostura - 3' }
            ]
        },
        {
            subtitleKey: 'galeria_bloque5_subtitle',
            descriptionKey: 'galeria_bloque5_description',
            fotos: [
                { src: 'Galeria13.webp', alt: 'Palacio de Justicia - 1' },
                { src: 'Galeria14.webp', alt: 'Palacio de Justicia - 2' },
                { src: 'Galeria15.webp', alt: 'Palacio de Justicia - 3' }
            ]
        }
    ];

    // ==========================================
    // HELPER i18n: obtener traducción con fallback
    // ==========================================
    function t(key, fallback) {
        if (!key) return fallback || '';
        if (window.CODEHCIU_I18N) {
            // Intentamos varios posibles nombres de método
            const api = window.CODEHCIU_I18N;
            if (typeof api.t === 'function') {
                const v = api.t(key);
                if (v && v !== key) return v;
            }
            if (typeof api.translate === 'function') {
                const v = api.translate(key);
                if (v && v !== key) return v;
            }
            if (typeof api.get === 'function') {
                const v = api.get(key);
                if (v && v !== key) return v;
            }
            if (typeof api.getString === 'function') {
                const v = api.getString(key);
                if (v && v !== key) return v;
            }
        }
        return fallback || key;
    }

    // ==========================================
    // ELEMENTOS DEL DOM
    // ==========================================
    const track = document.getElementById('galeriaTrack');
    const subtitleEl = document.getElementById('galeriaSubtitle');
    const descriptionEl = document.getElementById('galeriaDescription');
    const prevBtn = document.getElementById('galeriaPrev');
    const nextBtn = document.getElementById('galeriaNext');

    if (!track) {
        console.error('❌ No se encontró #galeriaTrack');
        return;
    }

    // ==========================================
    // ESTADO
    // ==========================================
    let currentIndex = 0;

    // Aplanamos todas las fotos en un solo array, guardando a qué bloque pertenecen
    const allFotos = [];
    bloques.forEach(function (bloque, bloqueIndex) {
        bloque.fotos.forEach(function (foto) {
            allFotos.push({
                src: foto.src,
                alt: foto.alt || '',
                bloque: bloqueIndex
            });
        });
    });
    const totalSlides = allFotos.length;

    console.log('📸 Total fotos:', totalSlides, '| Total bloques:', bloques.length);

    // ==========================================
    // RENDERIZAR SLIDES
    // ==========================================
    function renderSlides() {
        track.innerHTML = '';
        allFotos.forEach(function (foto, i) {
            const slide = document.createElement('div');
            slide.className = 'galeria-slide';

            const img = document.createElement('img');
            img.src = imgPath + foto.src;   // 👈 una sola concatenación
            img.alt = foto.alt;
            img.loading = i < 2 ? 'eager' : 'lazy';
            img.draggable = false;

            img.onerror = function () {
                console.error('❌ No se pudo cargar:', img.src);
            };

            slide.appendChild(img);
            track.appendChild(slide);
        });
    }

    // ==========================================
    // ACTUALIZAR TEXTO SEGÚN BLOQUE (i18n)
    // ==========================================
    function updateTextForCurrentSlide() {
        const fotoActual = allFotos[currentIndex];
        if (!fotoActual) return;

        const bloqueActual = bloques[fotoActual.bloque];
        if (!bloqueActual) return;

        // Resolver textos en el idioma activo
        const nuevoSubtitulo = t(bloqueActual.subtitleKey, bloqueActual.subtitleKey);
        const nuevaDescripcion = t(bloqueActual.descriptionKey, bloqueActual.descriptionKey);

        // Si no cambió nada, no hacemos nada (evita parpadeos)
        if (subtitleEl.textContent.trim() === nuevoSubtitulo.trim() &&
            descriptionEl.textContent.trim() === nuevaDescripcion.trim()) {
            return;
        }

        subtitleEl.classList.add('is-fading');
        descriptionEl.classList.add('is-fading');

        setTimeout(function () {
            subtitleEl.textContent = nuevoSubtitulo;
            descriptionEl.textContent = nuevaDescripcion;
            subtitleEl.classList.remove('is-fading');
            descriptionEl.classList.remove('is-fading');
        }, 200);
    }

    // ==========================================
    // ACTUALIZAR CARRUSEL
    // ==========================================
    function updateCarousel() {
        const firstSlide = track.querySelector('.galeria-slide');
        const slideWidth = firstSlide ? firstSlide.offsetWidth : 0;
        track.style.transform = 'translateX(-' + (currentIndex * slideWidth) + 'px)';
        updateTextForCurrentSlide();
    }

    // ==========================================
    // NAVEGACIÓN
    // ==========================================
    function goToSlide(index) {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        currentIndex = index;
        updateCarousel();
    }

    function nextSlide() { goToSlide(currentIndex + 1); }
    function prevSlide() { goToSlide(currentIndex - 1); }

    // ==========================================
    // INICIALIZAR
    // ==========================================
    renderSlides();

    // Textos iniciales del bloque 1 (resolviendo idioma actual)
    if (bloques[0]) {
        subtitleEl.textContent = t(bloques[0].subtitleKey, bloques[0].subtitleKey);
        descriptionEl.textContent = t(bloques[0].descriptionKey, bloques[0].descriptionKey);
    }

    // Esperar un tick para que el DOM mida bien los slides
    setTimeout(updateCarousel, 50);

    // ==========================================
    // EVENTOS
    // ==========================================
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);

    // Flechas del teclado (solo cuando la sección está visible)
    document.addEventListener('keydown', function (e) {
        const section = document.getElementById('galeria');
        if (!section) return;
        const rect = section.getBoundingClientRect();
        const visible = rect.top < window.innerHeight && rect.bottom > 0;
        if (!visible) return;

        if (e.key === 'ArrowLeft') prevSlide();
        if (e.key === 'ArrowRight') nextSlide();
    });

    // Recalcular al redimensionar
    let resizeTimeout;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(updateCarousel, 200);
    });

    // ==========================================
    // REACCIONAR AL CAMBIO DE IDIOMA
    // Intentamos varios nombres de evento por compatibilidad.
    // Si tu lang.js emite uno distinto, avísame y lo ajusto.
    // ==========================================
    const langEvents = ['languageChanged', 'langChanged', 'i18n:change', 'codehciu:lang', 'codehciuLanguageChanged'];
    langEvents.forEach(function (evtName) {
        document.addEventListener(evtName, function () {
            console.log('🌐 Evento de idioma detectado:', evtName);
            updateTextForCurrentSlide();
        });
    });

    // Fallback: detectar clics en los botones de cambio de idioma
    // (por si lang.js no emite evento)
    document.addEventListener('click', function (e) {
        const langBtn = e.target.closest('[data-lang], .lang-btn, .language-switch, .lang-switch');
        if (langBtn) {
            // Esperamos un poco a que lang.js aplique el cambio
            setTimeout(updateTextForCurrentSlide, 150);
        }
    });

    // Exponer helper por si lo necesitas desde fuera
    window.__galeriaRefreshText = updateTextForCurrentSlide;

    console.log('✅ Galería inicializada');
});