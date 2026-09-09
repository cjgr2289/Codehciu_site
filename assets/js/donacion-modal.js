// ==========================================
// MODAL DE BIENVENIDA - DONACIÓN
// SIEMPRE SE MUESTRA AL CARGAR LA PÁGINA
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    console.log('💛 Iniciando modal de donación...');

    var modal = document.getElementById('donationModal');
    var closeBtn = document.getElementById('closeDonationModal');
    var closeBtn2 = document.getElementById('closeDonationModalBtn');
    var donateBtn = document.querySelector('.btn-donate-primary');

    // Verificar si el modal existe
    if (!modal) {
        console.error('❌ Error: No se encontró el elemento #donationModal');
        return;
    }

    console.log('✅ Modal encontrado');

    // ✅ SIEMPRE mostrar el modal después de 3 segundos
    setTimeout(function() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        console.log('💛 Modal de donación mostrado');
    }, 3000);

    // Función para cerrar el modal
    function closeModal() {
        if (modal) {
            modal.classList.remove('active');
            document.body.style.overflow = '';
            console.log('💛 Modal de donación cerrado');
        }
    }

    // Eventos para cerrar
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    if (closeBtn2) {
        closeBtn2.addEventListener('click', closeModal);
    }

    // Cerrar al hacer clic fuera del modal
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    // El botón "Quiero Donar" redirige a donar.php
    if (donateBtn) {
        donateBtn.addEventListener('click', function(e) {
            console.log('💛 Redirigiendo a página de donación...');
        });
    }

    console.log('💛 Modal de donación inicializado - SIEMPRE se mostrará al cargar');
});