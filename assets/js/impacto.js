// ==========================================
// IMPACTO - ANIMACIÓN DE CONTADORES Y DESPLEGABLE
// ==========================================

document.addEventListener('DOMContentLoaded', function () {
    console.log('📊 Iniciando sección de impacto...');

    var section = document.getElementById('impacto');
    var toggleBtn = document.getElementById('toggleImpacto');
    var hiddenContent = document.getElementById('impactoHidden');
    var isOpen = false;
    var countersAnimated = false;

    // ==========================================
    // FUNCIÓN PARA ANIMAR CONTADORES
    // ==========================================
    function animateCounters() {
        if (countersAnimated) return;
        countersAnimated = true;

        var counters = document.querySelectorAll('.counter');

        counters.forEach(function (counter) {
            var card = counter.closest('.impacto-card');
            if (!card) return;

            var target = parseInt(card.getAttribute('data-count'));
            if (!target || isNaN(target)) return;

            var current = 0;
            var duration = 1500;
            var steps = Math.ceil(duration / 16);
            var stepIncrement = target / steps;

            var timer = setInterval(function () {
                current += stepIncrement;
                if (current >= target) {
                    counter.textContent = target.toLocaleString();
                    clearInterval(timer);
                } else {
                    counter.textContent = Math.floor(current).toLocaleString();
                }
            }, 16);
        });
    }

    // ==========================================
    // FUNCIÓN PARA DESPLEGAR/CONTRAER
    // ==========================================
    function toggleImpacto() {
        isOpen = !isOpen;

        if (isOpen) {
            hiddenContent.classList.add('open');
            toggleBtn.classList.add('open');
            toggleBtn.innerHTML = '<i class="fas fa-chevron-up"></i> Ver <span>menos indicadores</span>';

            // Animar los contadores ocultos después de desplegar
            setTimeout(function () {
                var hiddenCounters = hiddenContent.querySelectorAll('.counter');
                hiddenCounters.forEach(function (counter) {
                    var card = counter.closest('.impacto-card');
                    if (!card) return;

                    var target = parseInt(card.getAttribute('data-count'));
                    if (!target || isNaN(target)) return;

                    var current = 0;
                    var duration = 1200;
                    var steps = Math.ceil(duration / 16);
                    var stepIncrement = target / steps;

                    var timer = setInterval(function () {
                        current += stepIncrement;
                        if (current >= target) {
                            counter.textContent = target.toLocaleString();
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(current).toLocaleString();
                        }
                    }, 16);
                });
            }, 400);

        } else {
            hiddenContent.classList.remove('open');
            toggleBtn.classList.remove('open');
            toggleBtn.innerHTML = '<i class="fas fa-chevron-down"></i> Ver <span>más indicadores</span>';
        }
    }

    // ==========================================
    // EVENTO DEL BOTÓN
    // ==========================================
    if (toggleBtn) {
        toggleBtn.addEventListener('click', toggleImpacto);
    }

    // ==========================================
    // INTERSECTION OBSERVER - ACTIVAR CONTADORES
    // ==========================================
    if (section) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    setTimeout(function () {
                        animateCounters();
                    }, 300);
                    observer.disconnect();
                }
            });
        }, { threshold: 0.2 });

        observer.observe(section);
    } else {
        animateCounters();
    }

    console.log('📊 Sección de impacto inicializada');
});