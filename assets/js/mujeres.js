// ==========================================
// MUJERES - ANIMACIONES
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    const circularImage = document.querySelector('.circular-image');
    const textContent = document.querySelector('.text-content');
    
    // Animación de la imagen circular
    if (circularImage) {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'scale(1)';
                }
            });
        }, { threshold: 0.2 });
        
        circularImage.style.opacity = '0';
        circularImage.style.transform = 'scale(0.8)';
        circularImage.style.transition = 'all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1)';
        observer.observe(circularImage);
    }
    
    // Animación del texto
    if (textContent) {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateX(0)';
                }
            });
        }, { threshold: 0.2 });
        
        textContent.style.opacity = '0';
        textContent.style.transform = 'translateX(-30px)';
        textContent.style.transition = 'all 0.8s ease';
        observer.observe(textContent);
    }
});