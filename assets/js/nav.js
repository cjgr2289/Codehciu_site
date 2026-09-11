// /assets/js/nav.js
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mainNav = document.getElementById('main-nav');
    const langBtn = document.getElementById('lang-btn');
    const langDropdown = document.getElementById('lang-dropdown');
    const langOptions = document.querySelectorAll('.lang-option');
    
    // ELIMINADO: Efecto de scroll en el header (siempre transparente)
    // Ya no necesitamos el evento de scroll que cambia el fondo
    
    // Menú móvil
    mobileMenuBtn.addEventListener('click', function() {
        mainNav.classList.toggle('active');
        this.classList.toggle('active');
    });
    
    // Selector de idioma - el dropdown está cerrado por defecto
    langBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        const isVisible = langDropdown.style.display === 'block';
        langDropdown.style.display = isVisible ? 'none' : 'block';
    });
    
    // Selección de idioma
    langOptions.forEach(option => {
        option.addEventListener('click', function() {
            const selectedLang = this.getAttribute('data-lang');
            document.getElementById('lang-label').textContent = selectedLang;
            langBtn.setAttribute('title', `Cambiar idioma (${selectedLang})`);
            langDropdown.style.display = 'none'; // Cerrar después de seleccionar
            
            // Cambiar el texto del botón según el idioma
            const newTitle = selectedLang === 'ES' ? 'Cambiar idioma (ES)' : 'Change language (EN)';
            langBtn.setAttribute('title', newTitle);
            
            changeLanguage(selectedLang);
        });
    });
    
    // Cerrar dropdown al hacer clic fuera
    document.addEventListener('click', function() {
        langDropdown.style.display = 'none';
    });
    
    // Prevenir que el clic en el dropdown lo cierre
    langDropdown.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    // Navegación suave para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                // Cerrar menú móvil si está abierto
                if (window.innerWidth <= 768) {
                    mainNav.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                }
                
                // Scroll suave
                const headerHeight = header.offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Observador de intersección para animar secciones al hacer scroll
    function initSectionObserver() {
        const sections = document.querySelectorAll('section');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const sectionObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        sections.forEach(section => {
            sectionObserver.observe(section);
        });
    }
    
    // Función para cambiar idioma (placeholder)
    function changeLanguage(lang) {
        console.log('Cambiando idioma a:', lang);
        // Aquí implementarás la lógica de internacionalización
        // Esto sería con archivos JSON de traducción
    }
    
    // Inicializar observador de secciones
    initSectionObserver();
});