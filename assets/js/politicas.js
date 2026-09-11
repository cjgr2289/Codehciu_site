// ==========================================
// POLÍTICAS - TOGGLE
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    const descargarPoliticasBtn = document.getElementById('descargarPoliticas');
    const hiddenContent = document.querySelector('.hidden-content');
    
    if (descargarPoliticasBtn && hiddenContent) {
        descargarPoliticasBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            hiddenContent.classList.toggle('active');
            this.classList.toggle('active');
            
            if (hiddenContent.classList.contains('active')) {
                this.innerHTML = 'Ocultar políticas <span style="margin-left: 8px;">↑</span>';
            } else {
                this.innerHTML = 'Descargar políticas <span style="margin-left: 8px;">↓</span>';
            }
            
            if (hiddenContent.classList.contains('active')) {
                setTimeout(function() {
                    hiddenContent.scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'center' 
                    });
                }, 300);
            }
        });
    }
});