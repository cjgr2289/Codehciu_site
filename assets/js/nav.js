// ==========================================
// NAV - CON SISTEMA DE IDIOMAS
// ==========================================

document.addEventListener('DOMContentLoaded', function () {
    // ==========================================
    // MENÚ MÓVIL
    // ==========================================
    var mobileMenuBtn = document.getElementById('mobile-menu-btn');
    var mainNav = document.getElementById('main-nav');

    if (mobileMenuBtn && mainNav) {
        mobileMenuBtn.addEventListener('click', function () {
            mainNav.classList.toggle('active');
            this.classList.toggle('active');
        });
    }

    // ==========================================
    // SELECTOR DE IDIOMA
    // ==========================================
    var langBtn = document.getElementById('lang-btn');
    var langDropdown = document.getElementById('lang-dropdown');
    var langLabel = document.getElementById('lang-label');
    var langOptions = document.querySelectorAll('.lang-option');

    if (langBtn && langDropdown) {
        // Abrir/cerrar dropdown
        langBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            langDropdown.classList.toggle('active');
        });

        // Cerrar al hacer clic fuera
        document.addEventListener('click', function (e) {
            if (!langDropdown.contains(e.target) && e.target !== langBtn) {
                langDropdown.classList.remove('active');
            }
        });

        // Opciones de idioma
        langOptions.forEach(function (option) {
            option.addEventListener('click', function () {
                var lang = this.getAttribute('data-lang');

                // Cambiar idioma usando el sistema i18n
                if (window.CODEHCIU_I18N) {
                    window.CODEHCIU_I18N.setLang(lang);
                }

                // Actualizar label
                if (langLabel) {
                    langLabel.textContent = lang;
                }

                // Cerrar dropdown
                langDropdown.classList.remove('active');
            });
        });
    }

    // ==========================================
    // ACTUALIZAR LABEL DEL IDIOMA ACTUAL
    // ==========================================
    if (window.CODEHCIU_I18N && langLabel) {
        langLabel.textContent = window.CODEHCIU_I18N.getLang();
    }
});