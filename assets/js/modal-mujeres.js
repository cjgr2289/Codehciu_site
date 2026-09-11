// ==========================================
// MODALES - SECCIÓN MUJERES
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    console.log('👩 Iniciando modales de la sección Mujeres...');

    // Seleccionar todos los triggers
    var triggers = document.querySelectorAll('.modal-trigger');
    var modals = document.querySelectorAll('.modal-mujeres');
    var closeBtns = document.querySelectorAll('.modal-mujeres-close');

    // Abrir modal
    triggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            var modalId = this.getAttribute('data-modal');
            var modal = document.getElementById(modalId);
            
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
                console.log('📖 Modal abierto:', modalId);
            }
        });
    });

    // Cerrar modal con botón
    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            var modalId = this.getAttribute('data-modal');
            var modal = document.getElementById(modalId);
            
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
                console.log('📖 Modal cerrado:', modalId);
            }
        });
    });

    // Cerrar modal al hacer clic fuera
    modals.forEach(function(modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                document.body.style.overflow = '';
                console.log('📖 Modal cerrado (clic fuera)');
            }
        });
    });

    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            modals.forEach(function(modal) {
                if (modal.classList.contains('active')) {
                    modal.classList.remove('active');
                    document.body.style.overflow = '';
                    console.log('📖 Modal cerrado (ESC)');
                }
            });
        }
    });

    console.log('👩 Modales de la sección Mujeres inicializados');
});