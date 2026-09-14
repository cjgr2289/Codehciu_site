// ==========================================
// TRADUCCIONES - HERO
// ==========================================

(function() {
    'use strict';

    if (!window.CODEHCIU_I18N) {
        console.error('❌ lang.js debe cargarse antes que lang-hero.js');
        return;
    }

    window.CODEHCIU_I18N.register('hero', {
        ES: {
            hero_description: 'Trabajamos junto a la infancia, mujeres sobrevivientes de violencia y comunidades vulnerables para promover sus derechos y construir entornos seguros.',
            hero_scroll: 'Desplázate para explorar'
        },
        EN: {
            hero_description: 'We work alongside children, women survivors of violence, and vulnerable communities to promote their rights and build safe environments.',
            hero_scroll: 'Scroll to explore'
        }
    });

})();