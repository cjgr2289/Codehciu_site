// ==========================================
// PODCAST - ACORDEÓN
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    console.log('🎙️ Iniciando acordeón de podcasts...');

    var headers = document.querySelectorAll('.podcast-accordion-header');

    if (headers.length === 0) {
        console.error('❌ No se encontraron elementos del acordeón');
        return;
    }

    console.log('📚 Total de podcasts:', headers.length);

    // Abrir el primero por defecto
    var firstItem = document.querySelector('.podcast-accordion-item');
    if (firstItem) {
        firstItem.classList.add('active');
    }

    // Evento click en cada header
    headers.forEach(function(header) {
        header.addEventListener('click', function() {
            var parentItem = this.parentElement;
            var isActive = parentItem.classList.contains('active');

            // Cerrar todos los items
            document.querySelectorAll('.podcast-accordion-item').forEach(function(item) {
                item.classList.remove('active');
            });

            // Si no estaba activo, abrirlo
            if (!isActive) {
                parentItem.classList.add('active');
            }
        });
    });

    // Cerrar acordeón con tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.podcast-accordion-item').forEach(function(item) {
                item.classList.remove('active');
            });
        }
    });

    console.log('✅ Acordeón de podcasts iniciado');
});