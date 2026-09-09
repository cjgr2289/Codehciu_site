// ==========================================
// HERO - ANIMACIONES
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    // Animación de entrada para el hero
    const heroLeft = document.querySelector('.hero-left');
    const heroRight = document.querySelector('.hero-right');
    
    if (heroLeft) {
        heroLeft.style.opacity = '0';
        heroLeft.style.transform = 'translateY(30px)';
        setTimeout(() => {
            heroLeft.style.transition = 'all 1s ease-out';
            heroLeft.style.opacity = '1';
            heroLeft.style.transform = 'translateY(0)';
        }, 300);
    }
    
    if (heroRight) {
        heroRight.style.opacity = '0';
        heroRight.style.transform = 'translateY(30px)';
        setTimeout(() => {
            heroRight.style.transition = 'all 1s ease-out';
            heroRight.style.opacity = '1';
            heroRight.style.transform = 'translateY(0)';
        }, 600);
    }
});