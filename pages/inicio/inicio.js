// /pages/inicio/inicio.js

// DESACTIVAR SISTEMA DE IDIOMAS PARA EVITAR ERRORES 403
// Si usas un sistema de traducción, descomenta y configura correctamente
// window.i18n = {
//     load: function() { return Promise.resolve(); },
//     translate: function(key) { return key; }
// };

// O simplemente sobrescribe la función para que no haga nada
if (typeof window.i18n === 'undefined') {
    window.i18n = {
        load: function() { 
            console.log('Sistema de idiomas desactivado temporalmente');
            return Promise.resolve(); 
        },
        translate: function(key) { 
            return key; 
        },
        on: function() {},
        off: function() {}
    };
}

document.addEventListener('DOMContentLoaded', function() {
    console.log('Página de inicio cargada');
    
    // Aquí puedes agregar funcionalidades específicas para la página de inicio
    
    // Ejemplo: Animación para el botón CTA
    const ctaButton = document.querySelector('.cta-button');
    if (ctaButton) {
        ctaButton.addEventListener('click', function() {
            // Navegar a la sección Quiénes Somos
            const aboutSection = document.getElementById('quienesSomos');
            if (aboutSection) {
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = aboutSection.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    }

    
    
    // Ejemplo: Contador de estadísticas (puedes agregarlo más tarde)
    function initCounters() {
        // Aquí puedes inicializar animaciones de contadores si las agregas
    }
    
    // Ejemplo: Intersection Observer para animaciones al hacer scroll
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        // Observar elementos que quieres animar
        const animateElements = document.querySelectorAll('.stats-item, .feature-card');
        animateElements.forEach(el => observer.observe(el));
    }
    
    // Inicializar funcionalidades
    initCounters();
    initScrollAnimations();
});

    // ==========================================
    // SCROLL SUAVE AL FOOTER DESDE PODCAST
    // ==========================================

    document.addEventListener('DOMContentLoaded', function() {
        // Buscar el botón CTA de podcast que apunta al footer
        var ctaBtn = document.querySelector('.podcasts-cta-enhanced .btn-cta[href="#footer"]');
        
        if (ctaBtn) {
            ctaBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                var footer = document.getElementById('footer');
                if (footer) {
                    // Obtener la altura del header para compensar
                    var header = document.querySelector('header');
                    var headerHeight = header ? header.offsetHeight : 0;
                    var targetPosition = footer.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });

// Funcionalidad para la sección de políticas
document.addEventListener('DOMContentLoaded', function() {
    const descargarPoliticasBtn = document.getElementById('descargarPoliticas');
    const hiddenContent = document.querySelector('.hidden-content');
    
    if (descargarPoliticasBtn && hiddenContent) {
        descargarPoliticasBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Toggle de la clase active
            hiddenContent.classList.toggle('active');
            this.classList.toggle('active');
            
            // Cambiar el texto del botón
            if (hiddenContent.classList.contains('active')) {
                this.innerHTML = 'Ocultar políticas <span style="margin-left: 8px;">↑</span>';
                this.setAttribute('data-i18n', 'hide_policies');
            } else {
                this.innerHTML = 'Descargar políticas <span style="margin-left: 8px;">↓</span>';
                this.setAttribute('data-i18n', 'download_policies');
            }
            
            // Scroll suave para mostrar el contenido
            if (hiddenContent.classList.contains('active')) {
                setTimeout(() => {
                    hiddenContent.scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'center' 
                    });
                }, 300);
            }
        });
    }
});