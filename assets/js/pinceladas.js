// ==========================================
// PINCELADAS DE VIDA - CON MODAL Y AJUSTE DE IMÁGENES
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ pinceladas.js cargado y ejecutándose');

    // ==========================================
    // RUTA DE IMÁGENES
    // ==========================================
    const imgPath = 'assets/img/pinceladas/';
    console.log('📁 Ruta de imágenes:', imgPath);

    // ==========================================
    // DATOS DE LAS HISTORIAS
    // ==========================================
    const historias = [
        {
            id: 1,
            nombre: 'Camila Ternera',
            foto: imgPath + 'Camila_ternera_photo_2024-07-19_11-57-42.jpg',
            historia: 'Camila es una joven que encontró en el arte una forma de sanar sus heridas. A través de la pintura, logró expresar lo que las palabras no podían decir, transformando su dolor en color y esperanza.'
        },
        {
            id: 2,
            nombre: 'Gabriela Bello',
            foto: imgPath + 'Gabriela_Bello_photo_2024-07-19_12-20-21.jpg',
            historia: 'Gabriela sobrevivió a la violencia de género y encontró en el apoyo psicosocial la fuerza para reconstruir su vida. Hoy es un ejemplo de resiliencia y empoderamiento.'
        },
        {
            id: 3,
            nombre: 'Gabriela Bello II',
            foto: imgPath + 'Gabriela_Bello_II_photo_2024-07-19_12-20-47.jpg',
            historia: 'Gabriela encontró en el arte una forma de expresión y sanación. Sus pinturas reflejan su viaje de superación y esperanza.'
        },
        {
            id: 4,
            nombre: 'Gabriela Gómez',
            foto: imgPath + 'Gabriela_Gómez_Photo_2024-07-19_12-00-39.jpg',
            historia: 'La historia de Gabriela es un testimonio de superación. A pesar de las adversidades, logró salir adelante y ahora ayuda a otras mujeres a encontrar su voz y su poder.'
        },
        {
            id: 5,
            nombre: 'Haydee Oroño',
            foto: imgPath + 'Haydee_Oroño_photo_2024-07-19_11-59-04.jpg',
            historia: 'Haydee encontró en la comunidad y el apoyo mutuo la fuerza para enfrentar los desafíos de la vida. Su historia inspira a muchas personas a no rendirse.'
        },
        {
            id: 6,
            nombre: 'Hetcy Tineo',
            foto: imgPath + 'Hetcy_Tineo_photo_2024-07-19_12-13-23.jpg',
            historia: 'Hetcy es una mujer que transformó su dolor en arte. A través de sus pinturas, cuenta historias de esperanza y resiliencia que inspiran a toda una comunidad.'
        },
        {
            id: 7,
            nombre: 'Hetcy Tineo II',
            foto: imgPath + 'Hetcy_Tineo_II_photo_2024-07-19_12-29-07.jpg',
            historia: 'Hetcy continúa su viaje de sanación a través del arte, inspirando a otras mujeres a encontrar su propia voz.'
        },
        {
            id: 8,
            nombre: 'Hetcy Tineo III',
            foto: imgPath + 'Hetcy_Tineo_photo_2024-07-19_12-22-27.jpg',
            historia: 'Hetcy demuestra que el arte puede ser una poderosa herramienta de transformación personal y social.'
        },
        {
            id: 9,
            nombre: 'Jessica Natera',
            foto: imgPath + 'Jessica_Natera_photo_2024-07-19_12-02-42.jpg',
            historia: 'Jessica encontró en la escritura una forma de sanar y compartir su historia. Hoy es una defensora de los derechos de las mujeres y un ejemplo de superación.'
        },
        {
            id: 10,
            nombre: 'Nathaly Aponte',
            foto: imgPath + 'Nathaly_Aponte_photo_2024-07-19_11-55-01.jpg',
            historia: 'Nathaly es una joven que encontró en el arte y la comunidad el apoyo necesario para superar las adversidades. Su historia es un faro de esperanza.'
        },
        {
            id: 11,
            nombre: 'Nathaly Aponte II',
            foto: imgPath + 'Nathaly_Aponte_II_photo_2024-07-19_11-55-29.jpg',
            historia: 'Nathaly continúa su camino de sanación, inspirando a otros jóvenes a través de su historia de resiliencia.'
        },
        {
            id: 12,
            nombre: 'Neryulis Rodríguez',
            foto: imgPath + 'Neryulis_Rodríguez_photo_2024-07-19_12-26-18.jpg',
            historia: 'Neryulis es una mujer que ha dedicado su vida a ayudar a otros. Su historia de servicio y compromiso es un ejemplo para toda la comunidad.'
        },
        {
            id: 13,
            nombre: 'Paola Calderón',
            foto: imgPath + 'Paola_Calderón_photo_2024-07-19_12-06-42.jpg',
            historia: 'Paola encontró en la terapia psicológica el camino hacia la sanación. Hoy ayuda a otras mujeres a encontrar su propia fuerza interior.'
        },
        {
            id: 14,
            nombre: 'Sharol Ternera',
            foto: imgPath + 'Sharol_Ternera_photo_2024-07-19_12-17-54.jpg',
            historia: 'Sharol es una joven que ha demostrado que la edad no es un obstáculo para hacer la diferencia. Su historia inspira a muchos jóvenes a perseguir sus sueños.'
        },
        {
            id: 15,
            nombre: 'Sofia Bello',
            foto: imgPath + 'Sofia_Bello_photo_2024-07-19_11-50-55.jpg',
            historia: 'Sofia encontró en el arte una forma de expresar su mundo interior. Sus pinturas son un reflejo de su alma y una invitación a la reflexión.'
        },
        {
            id: 16,
            nombre: 'Valentina Quintero',
            foto: imgPath + 'Valentina_Quintero_photo_2024-07-19_12-24-15.jpg',
            historia: 'Valentina es una mujer que ha convertido su experiencia de vida en una herramienta para ayudar a otros. Su historia es un testimonio de resiliencia y esperanza.'
        }
    ];

    console.log('📚 ' + historias.length + ' historias cargadas');

    // ==========================================
    // ELEMENTOS DEL DOM
    // ==========================================
    var track = document.getElementById('pinceladasTrack');
    var indicators = document.getElementById('pinceladasIndicators');
    var currentSlideEl = document.getElementById('currentSlide');
    var totalSlidesEl = document.getElementById('totalSlides');
    var prevBtn = document.querySelector('.prev-btn');
    var nextBtn = document.querySelector('.next-btn');

    // Elementos del Modal
    var modal = document.getElementById('pinceladasModal');
    var modalImage = document.getElementById('modalImage');
    var modalTitle = document.getElementById('modalTitle');
    var modalStory = document.getElementById('modalStory');
    var closeModalBtn = document.getElementById('closeModalBtn');
    var prevModalBtn = document.getElementById('prevModalBtn');
    var nextModalBtn = document.getElementById('nextModalBtn');
    var modalPosition = document.getElementById('modalPosition');
    var modalTotal = document.getElementById('modalTotal');

    // Verificar que los elementos existen
    console.log('🔍 Elementos del DOM:');
    console.log('  - track:', track ? '✅ encontrado' : '❌ NO encontrado');
    console.log('  - indicators:', indicators ? '✅ encontrado' : '❌ NO encontrado');
    console.log('  - modal:', modal ? '✅ encontrado' : '❌ NO encontrado');
    console.log('  - prevModalBtn:', prevModalBtn ? '✅ encontrado' : '❌ NO encontrado');
    console.log('  - nextModalBtn:', nextModalBtn ? '✅ encontrado' : '❌ NO encontrado');

    if (!track) {
        console.error('❌ El elemento #pinceladasTrack NO existe en el DOM');
        return;
    }

    if (!prevModalBtn || !nextModalBtn) {
        console.warn('⚠️ Los botones del modal no se encontraron, verificando clases alternativas...');
        // Intentar con las clases antiguas
        prevModalBtn = document.querySelector('.modal-nav-btn.prev-modal');
        nextModalBtn = document.querySelector('.modal-nav-btn.next-modal');
        if (prevModalBtn && nextModalBtn) {
            console.log('✅ Botones encontrados con clases antiguas');
        }
    }

    // ==========================================
    // VARIABLES DE ESTADO
    // ==========================================
    var currentIndex = 0;
    var totalSlides = historias.length;
    var modalCurrentIndex = 0;
    var autoPlayInterval = null;

    // ==========================================
    // FUNCIONES DEL CARRUSEL
    // ==========================================

    function renderSlides() {
        console.log('🖼️ Renderizando slides...');
        track.innerHTML = '';
        
        for (var i = 0; i < historias.length; i++) {
            var historia = historias[i];
            var slide = document.createElement('div');
            slide.className = 'carousel-slide';
            slide.dataset.index = i;
            
            var img = document.createElement('img');
            img.src = historia.foto;
            img.alt = historia.nombre;
            img.loading = i < 3 ? 'eager' : 'lazy';
            
            img.onerror = function(nombre, foto) {
                return function() {
                    console.error('❌ Error cargando imagen:', foto);
                    this.src = 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="800" height="450" viewBox="0 0 800 450"%3E%3Crect width="800" height="450" fill="%232c3e50"/%3E%3Ctext x="400" y="225" font-family="Arial" font-size="28" fill="%23ffffff" text-anchor="middle"%3EImagen no disponible%3C/text%3E%3Ctext x="400" y="265" font-family="Arial" font-size="18" fill="%23999" text-anchor="middle"%3E' + nombre + '%3C/text%3E%3C/svg%3E';
                };
            }(historia.nombre, historia.foto);
            
            img.onload = function(nombre) {
                return function() {
                    console.log('✅ Imagen cargada:', nombre);
                };
            }(historia.nombre);
            
            slide.appendChild(img);

            var overlay = document.createElement('div');
            overlay.className = 'slide-overlay';
            var resumen = historia.historia.substring(0, 80);
            if (historia.historia.length > 80) {
                resumen = resumen + '...';
            }
            overlay.innerHTML = '<h3>' + historia.nombre + '</h3><p>' + resumen + '</p>';
            slide.appendChild(overlay);

            var hint = document.createElement('div');
            hint.className = 'click-hint';
            hint.innerHTML = '<i class="fas fa-expand"></i> Ver imagen completa';
            slide.appendChild(hint);

            slide.addEventListener('click', function(index) {
                return function() {
                    openModal(index);
                };
            }(i));
            
            track.appendChild(slide);
        }
        
        totalSlidesEl.textContent = totalSlides;
        updateCarousel();
        console.log('✅ ' + totalSlides + ' slides renderizados');
    }

    function updateCarousel() {
        var slideWidth = 0;
        var firstSlide = track.querySelector('.carousel-slide');
        if (firstSlide) {
            slideWidth = firstSlide.offsetWidth;
        }
        track.style.transform = 'translateX(-' + (currentIndex * slideWidth) + 'px)';
        updateCounter();
        updateIndicators();
    }

    function updateCounter() {
        currentSlideEl.textContent = currentIndex + 1;
    }

    function updateIndicators() {
        var dots = indicators.querySelectorAll('.dot');
        for (var i = 0; i < dots.length; i++) {
            if (i === currentIndex) {
                dots[i].classList.add('active');
            } else {
                dots[i].classList.remove('active');
            }
        }
    }

    function goToSlide(index) {
        if (index < 0) index = 0;
        if (index >= totalSlides) index = totalSlides - 1;
        currentIndex = index;
        updateCarousel();
    }

    function nextSlide() {
        if (currentIndex < totalSlides - 1) {
            goToSlide(currentIndex + 1);
        } else {
            goToSlide(0);
        }
    }

    function prevSlide() {
        if (currentIndex > 0) {
            goToSlide(currentIndex - 1);
        } else {
            goToSlide(totalSlides - 1);
        }
    }

    // ==========================================
    // FUNCIONES DEL MODAL
    // ==========================================

    function openModal(index) {
        modalCurrentIndex = index;
        var historia = historias[index];
        
        modalImage.style.display = 'none';
        modalImage.src = '';
        
        var tempImg = new Image();
        tempImg.onload = function() {
            modalImage.src = tempImg.src;
            modalImage.style.display = 'block';
            void modalImage.offsetHeight;
        };
        tempImg.onerror = function() {
            modalImage.src = 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="600" height="400" viewBox="0 0 600 400"%3E%3Crect width="600" height="400" fill="%232c3e50"/%3E%3Ctext x="300" y="200" font-family="Arial" font-size="24" fill="%23ffffff" text-anchor="middle"%3EImagen no disponible%3C/text%3E%3Ctext x="300" y="240" font-family="Arial" font-size="16" fill="%23999" text-anchor="middle"%3E' + historia.nombre + '%3C/text%3E%3C/svg%3E';
            modalImage.style.display = 'block';
        };
        tempImg.src = historia.foto;
        
        modalTitle.textContent = historia.nombre;
        modalStory.textContent = historia.historia;
        
        if (modalTotal) {
            modalTotal.textContent = totalSlides;
        }
        
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        updateModalButtons();
        stopAutoPlay();
    }

    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        startAutoPlay();
    }

    function modalNext() {
        if (modalCurrentIndex < totalSlides - 1) {
            openModal(modalCurrentIndex + 1);
        }
    }

    function modalPrev() {
        if (modalCurrentIndex > 0) {
            openModal(modalCurrentIndex - 1);
        }
    }

    function updateModalButtons() {
        if (prevModalBtn) {
            prevModalBtn.disabled = (modalCurrentIndex === 0);
            prevModalBtn.style.opacity = (modalCurrentIndex === 0) ? '0.3' : '1';
        }
        if (nextModalBtn) {
            nextModalBtn.disabled = (modalCurrentIndex === totalSlides - 1);
            nextModalBtn.style.opacity = (modalCurrentIndex === totalSlides - 1) ? '0.3' : '1';
        }
        if (modalPosition) {
            modalPosition.textContent = modalCurrentIndex + 1;
        }
    }

    // ==========================================
    // AUTO-PLAY
    // ==========================================

    function startAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
        }
        autoPlayInterval = setInterval(nextSlide, 5000);
    }

    function stopAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
            autoPlayInterval = null;
        }
    }

    // ==========================================
    // CREAR INDICADORES
    // ==========================================

    function createIndicators() {
        indicators.innerHTML = '';
        for (var i = 0; i < totalSlides; i++) {
            var dot = document.createElement('button');
            dot.className = 'dot';
            if (i === 0) {
                dot.classList.add('active');
            }
            dot.setAttribute('aria-label', 'Ir a la historia ' + (i + 1));
            dot.addEventListener('click', function(index) {
                return function() {
                    goToSlide(index);
                };
            }(i));
            indicators.appendChild(dot);
        }
    }

    // ==========================================
    // EVENTOS
    // ==========================================

    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            stopAutoPlay();
            prevSlide();
            setTimeout(startAutoPlay, 3000);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            stopAutoPlay();
            nextSlide();
            setTimeout(startAutoPlay, 3000);
        });
    }

    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', closeModal);
    }

    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    }

    if (prevModalBtn) {
        prevModalBtn.addEventListener('click', modalPrev);
    }

    if (nextModalBtn) {
        nextModalBtn.addEventListener('click', modalNext);
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            if (modal && modal.classList.contains('active')) {
                modalPrev();
            } else {
                stopAutoPlay();
                prevSlide();
                setTimeout(startAutoPlay, 3000);
            }
        }
        else if (e.key === 'ArrowRight') {
            if (modal && modal.classList.contains('active')) {
                modalNext();
            } else {
                stopAutoPlay();
                nextSlide();
                setTimeout(startAutoPlay, 3000);
            }
        }
        else if (e.key === 'Escape') {
            if (modal && modal.classList.contains('active')) {
                closeModal();
            }
        }
    });

    var carouselContainer = document.querySelector('.carousel-main-container');
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', stopAutoPlay);
        carouselContainer.addEventListener('mouseleave', startAutoPlay);
    }

    var resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            updateCarousel();
        }, 200);
    });

    // ==========================================
    // INICIALIZAR
    // ==========================================
    createIndicators();
    renderSlides();
    startAutoPlay();

    console.log('📸 Carrusel Pinceladas de Vida iniciado con ' + totalSlides + ' historias');
});